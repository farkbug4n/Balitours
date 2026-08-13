# Vercel Deployment Guide - Frontend SPA

## What's Been Set Up

✅ `vercel.json` - SPA routing configuration (rewrites all routes to index.html)
✅ `.vercelignore` - Excludes PHP/Laravel backend files from deployment
✅ `.env.local.example` - Environment variable template

## Step 1: Prepare Your Git Repository

```bash
# Make sure your changes are committed
git add .
git commit -m "Setup Vercel deployment configuration"
git push
```

## Step 2: Create Vercel Account & Connect GitHub

1. Go to [vercel.com](https://vercel.com)
2. Click **Sign Up** → Select **Continue with GitHub**
3. Authorize Vercel to access your GitHub account
4. Click **Import Project**
5. Select your Balitours repository

## Step 3: Configure Build Settings

Vercel should auto-detect your setup, but verify:

- **Framework**: Other (or Node.js)
- **Build Command**: `npm run build`
- **Output Directory**: `dist`
- **Install Command**: `npm install`

## Step 4: Set Environment Variables

In Vercel Project Settings → **Environment Variables**:

**Add the following:**

| Key | Value | Environment |
|-----|-------|-------------|
| `VITE_API_BASE_URL` | `http://localhost:8000` (dev) or your backend URL | Production |

**Example Backend URLs:**
- Local development: `http://localhost:8000`
- Railway: `https://your-app.railway.app`
- Fly.io: `https://your-app.fly.dev`
- Custom domain: `https://api.yourdomain.com`

## Step 5: Deploy

### Option A: Deploy from Vercel Dashboard (Recommended)

1. Click **Deploy** on your Vercel dashboard
2. Wait for build to complete
3. View your live site at `your-project-name.vercel.app`

### Option B: Deploy via Vercel CLI

```bash
# Install Vercel CLI
npm i -g vercel

# Deploy from project root
vercel

# For production deployment
vercel --prod
```

## Step 6: Fix Your Frontend to Call Backend API

Update your JavaScript to use the API URL from environment variables.

### Example (Frontend API calls)

```javascript
// resources/js/app.js or any API utility file
const API_BASE_URL = import.meta.env.VITE_API_BASE_URL || 'http://localhost:8000';

export async function apiCall(endpoint, options = {}) {
    const url = `${API_BASE_URL}/api${endpoint}`;
    
    try {
        const response = await fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                ...options.headers,
            },
            ...options,
        });
        
        if (!response.ok) {
            throw new Error(`API Error: ${response.status}`);
        }
        
        return await response.json();
    } catch (error) {
        console.error('API call failed:', error);
        throw error;
    }
}
```

## Step 7: CORS Configuration (Important!)

Your Laravel backend needs to allow requests from Vercel. Update `config/cors.php`:

```php
'allowed_origins' => [
    'http://localhost:3000',        // Local development
    'http://localhost:5173',        // Vite dev server
    'https://*.vercel.app',         // All Vercel preview deployments
    'https://yourdomain.com',       // Your production domain
],
```

Or add to your Laravel backend in `.env`:

```env
FRONTEND_URL=https://your-project.vercel.app
```

## Step 8: Test Your Deployment

1. **Test frontend loads**: Visit your Vercel deployment URL
2. **Test API calls**: Check browser console for any CORS errors
3. **Test routing**: Navigate to different routes (should work without 404s)
4. **Test environment variables**: Add a debug endpoint to verify `VITE_API_BASE_URL` is set

## Troubleshooting

### ❌ "Cannot GET /" error
- Verify `vercel.json` rewrites are configured correctly
- Check `.vercelignore` isn't excluding necessary files

### ❌ API calls fail with CORS error
- Verify your Laravel backend CORS config
- Check `VITE_API_BASE_URL` is set correctly in Vercel Environment Variables
- Ensure your backend accepts requests from your Vercel domain

### ❌ Build fails
- Run `npm run build` locally to check for build errors
- Check Node.js version compatibility (Vercel uses Node 20 by default)

### ❌ Environment variables not loading
- In Vercel dashboard: Settings → Environment Variables
- Redeploy after adding/updating variables
- Variables only load during build time (not runtime changes)

## Next Steps: Deploy Your Backend

Once frontend is working, you'll need to host your Laravel backend. Options:

- **Railway.app** - Easy Laravel hosting (~$5/month)
- **Fly.io** - Flexible containerized hosting
- **Laravel Forge** - Official Laravel hosting
- **DigitalOcean** - VPS with full control
- **AWS/Azure/Google Cloud** - Enterprise options

## Additional Resources

- [Vercel Docs](https://vercel.com/docs)
- [Laravel Vite Plugin Docs](https://laravel.com/docs/vite)
- [SPA Routing on Vercel](https://vercel.com/docs/concepts/projects/project-configuration#rewrites)

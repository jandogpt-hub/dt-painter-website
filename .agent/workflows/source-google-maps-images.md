---
description: workflow for identifying, constructing, and downloading Google Maps contributor images for area pages
---

# Google Maps Image Sourcing Workflow

Use this process to source high-quality, 800px width images for city/area pages.

## 1. Identify the Photo ID
1. Navigate to the location on Google Maps.
2. Open the "Photos" tab.
3. Click a high-quality photo.
4. Inspect the URL for the **Photo ID**. It almost always starts with `AF1Q`.
   *   *Example URL:* `https://www.google.com/maps/.../data=!3m8!1e2...1sAF1QipO9vGgDAIs...`
   *   *Target ID:* `AF1QipO9vGgDAIs_G66KSX8b8RHCS_6hqzuZZZ_uVxU0`

## 2. Construct the Download URL
Append the Photo ID to the standard Google User Content base URL with the width parameter.

*   **Base:** `https://lh5.googleusercontent.com/p/`
*   **Suffix:** `=w800` (for optimal 800px width)
*   **Final Format:** `https://lh5.googleusercontent.com/p/[PHOTO_ID]=w800`

## 3. Download Strategy (Do Not Hotlink)
Hotlinking these URLs often results in 403 Forbidden errors. Always download them locally.

1.  **Create Directory:** Ensure `assets/images/area-served/[city-slug]/` exists.
2.  **Download:**
    ```powershell
    [Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
    Invoke-WebRequest -Uri "https://lh5.googleusercontent.com/p/[PHOTO_ID]=w800" -OutFile "assets/images/area-served/[city-slug]/[attraction_name].jpg"
    ```
3.  **Implement:** Reference the local file in the PHP code.
    ```php
    <img src="/assets/images/area-served/[city-slug]/[attraction_name].jpg" ...>
    ```

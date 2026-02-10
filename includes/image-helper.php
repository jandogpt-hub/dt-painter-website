<?php
/**
 * DT Painter - Image Helper
 * Automates Cloudinary transformations: Aspect Ratio, Watermarking, and Optimization.
 */

/**
 * Generates an optimized, watermarked Cloudinary URL
 * 
 * @param string $filename The public ID / filename of the image on Cloudinary
 * @param int $width The desired width of the image (default 800)
 * @param string $ar The aspect ratio (default 4:3)
 * @return string The complete Cloudinary URL
 */
function get_dt_image($filename, $width = 800, $ar = '4:3') {
    $cloud_name = CLOUDINARY_CLOUD_NAME;
    $logo_id = CLOUDINARY_LOGO_ID;
    
    /**
     * Parameter Breakdown:
     * ar_$ar,c_auto : Aspect Ratio + Smart Cropping
     * w_$width : Sets output width
     * l_$logo_id... : Overlays the logo as a watermark
     *   - o_20 : 20% Opacity (subtle)
     *   - w_100 : Logo width 100px
     *   - g_south_east : Positioned bottom-right
     *   - x_10,y_10 : 10px padding from the edge
     * f_auto,q_auto : Auto format (WebP/AVIF) and Auto quality
     */
    $transforms = "ar_$ar,c_auto,w_$width/l_$logo_id,o_20,w_100,g_south_east,x_10,y_10/f_auto,q_auto";
    
    return "https://res.cloudinary.com/$cloud_name/image/upload/$transforms/$filename";
}

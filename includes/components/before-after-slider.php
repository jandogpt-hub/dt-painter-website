<?php
/**
 * Comparison Image Slider Component
 * 
 * Reusable component for visualizing before/after transformations.
 * 
 * Usage:
 * include 'before-after-slider.php';
 * $sliderConfig = [
 *     'beforeImage' => 'url',
 *     'afterImage' => 'url',
 *     'beforeLabel' => 'Before',
 *     'afterLabel' => 'After'
 * ];
 */
$beforeImage = $sliderConfig['beforeImage'] ?? '';
$afterImage = $sliderConfig['afterImage'] ?? '';
$beforeLabel = $sliderConfig['beforeLabel'] ?? 'Before';
$afterLabel = $sliderConfig['afterLabel'] ?? 'After';
$uniqueId = 'slider-' . uniqid();
?>

<div id="<?= $uniqueId ?>" class="group relative w-full overflow-hidden rounded-lg shadow-xl aspect-video select-none touch-pan-y">
    <!-- IMAGES CONTAINER -->
    <div class="relative w-full h-full">
        <!-- AFTER Image (Background) -->
        <img src="<?= $afterImage ?>" 
             alt="<?= $afterLabel ?>" 
             class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none">
             
        <!-- BEFORE Image (Foreground with Clip Path) -->
        <div class="absolute inset-0 w-full h-full overflow-hidden select-none pointer-events-none" 
             style="clip-path: inset(0 50% 0 0);">
            <img src="<?= $beforeImage ?>" 
                 alt="<?= $beforeLabel ?>" 
                 class="absolute inset-0 w-full h-full object-cover">
        </div>
        
        <!-- LABELS -->
        <div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white px-3 py-1 text-xs font-bold uppercase tracking-wider rounded-sm z-20 pointer-events-none border border-white/10">
            <?= $beforeLabel ?>
        </div>
        <div class="absolute top-4 right-4 bg-brand-red/80 backdrop-blur-sm text-white px-3 py-1 text-xs font-bold uppercase tracking-wider rounded-sm z-20 pointer-events-none border border-white/10">
            <?= $afterLabel ?>
        </div>
    </div>

    <!-- DRAGGABLE HANDLE -->
    <div class="absolute top-0 bottom-0 w-1 bg-white cursor-ew-resize z-30 pointer-events-none shadow-[0_0_10px_rgba(0,0,0,0.5)]" 
         style="left: 50%;">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-white rounded-full shadow-lg flex items-center justify-center border-2 border-brand-red">
            <svg class="w-4 h-4 text-brand-red transform rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
            </svg>
        </div>
    </div>

    <!-- RANGE INPUT OVERLAY -->
    <input type="range" min="0" max="100" value="50" 
           class="absolute inset-0 w-full h-full opacity-0 cursor-ew-resize z-40 outline-none m-0 p-0 hover:cursor-ew-resize focus:outline-none"
           aria-label="Compare before and after images"
           oninput="updateSlider('<?= $uniqueId ?>', this.value)">
</div>

<script>
    if (typeof updateSlider !== 'function') {
        function updateSlider(containerId, value) {
            const container = document.getElementById(containerId);
            const beforeImage = container.querySelector('div[style*=\'clip-path\']');
            const handle = container.querySelector('.bg-white.cursor-ew-resize');
            
            // Update visual state using requestAnimationFrame for smoothness
            requestAnimationFrame(() => {
                beforeImage.style.clipPath = `inset(0 ${100 - value}% 0 0)`;
                handle.style.left = `${value}%`;
            });
        }
    }
</script>

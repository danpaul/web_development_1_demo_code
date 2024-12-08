<div class="container mt-5">
    <h1 class="text-center">RGB Background Color Changer</h1>
    <div class="row mt-4">
        <div class="col-md-12">
            <!-- Red Slider -->
            <label for="redSlider" class="form-label">Red</label>
            <input type="range" class="form-range" id="redSlider" min="0" max="255" onchange="changeBackgroundColor()">
        </div>
        <div class="col-md-12 mt-3">
            <!-- Green Slider -->
            <label for="greenSlider" class="form-label">Green</label>
            <input type="range" class="form-range" id="greenSlider" min="0" max="255" onchange="changeBackgroundColor()">
        </div>
        <div class="col-md-12 mt-3">
            <!-- Blue Slider -->
            <label for="blueSlider" class="form-label">Blue</label>
            <input type="range" class="form-range" id="blueSlider" min="0" max="255" onchange="changeBackgroundColor()">
        </div>
    </div>
</div>
<script src="/assets/js/slider-solution.js"></script>
<div class="container-map d-flex">
    <div class="sidebar">
        <div class="accordion" id="accordionSidebar">

            <!-- Established -->
             {{-- <div class="accordion-item"> --}}
            <h2 class="accordion-header" id="headingEstablished">
                <button class="accordion-button section-title section-established" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEstablished" aria-expanded="true" aria-controls="collapseEstablished">
                    Established
                </button>
            </h2>
            <div id="collapseEstablished" class="accordion-collapse collapse show"  data-status="established" data-bs-parent="#accordionSidebar">
                <div class="accordion-body p-0">
                    <div class="location-item location-established" data-name="Jakarta">Jakarta</div>
                    <div class="location-item location-established" data-name="Surabaya">Surabaya</div>
                    <div class="location-item location-established" data-name="Samarinda">Samarinda</div>
                    <div class="location-item location-established" data-name="Palembang">Palembang</div>
                    <div class="location-item location-established" data-name="Pontianak">Pontianak</div>
                    <div class="location-item location-established" data-name="Banjarmasin">Banjarmasin</div>
                </div>
            </div>
        </div>

            <!-- On Progress -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingProgress">
                    <button class="accordion-button collapsed section-title section-progress" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProgress" aria-expanded="false" aria-controls="collapseProgress">
                        On Progress
                    </button>
                </h2>
                <div id="collapseProgress" class="accordion-collapse collapse" data-status="on-progress" data-bs-parent="#accordionSidebar">
                    <div class="accordion-body p-0">
                        <div class="location-item location-progress" data-name="Semarang">Semarang (On Progress)</div>
                        <div class="location-item location-progress" data-name="Riau">Riau (On Progress)</div>
                        <div class="location-item location-progress" data-name="Central Kalimantan">Central Kalimantan (On Progress)</div>
                        <div class="location-item location-progress" data-name="North Kalimantan">North Kalimantan (On Progress)</div>
                        <div class="location-item location-progress" data-name="Makassar dan Palu">Makassar dan Palu (On Progress)</div>
                        <div class="location-item location-progress" data-name="Medan">Medan (On Progress)</div>
                        <div class="location-item location-progress" data-name="Palu">Palu (On Progress)</div>
                    </div>
                </div>
            </div>

    </div>
    {{-- </div> --}}

    <div id="map"></div> <!-- Peta di sini -->
</div>
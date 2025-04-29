@extends('company.layout.main')


@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<style>
#map {
height: calc(100vh - 100px);
width: 100%;
z-index: 1;
}

.container-map {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 20px;
}

.sidebar {
    width: 400px; /* Sidebar akan memiliki lebar tetap */
    height: 600px; /* Sidebar setinggi peta */
    overflow-y: auto;
    border-right: 1px solid #ccc;
    padding: 10px;
}

.accordion-button.section-title {
    font-weight: bold;
    background-color: #fff;
    color: #000;
    padding: 10px 15px;
    border-bottom: 1px solid #ccc;
    font-size:13px;
}

.accordion-button.section-established {
    background-color: #c0392b;
    color: #fff;
}

.accordion-button.section-progress {
    background-color: #2c3e50;
    color: #fff;
}

.accordion-body .location-item {
    padding: 8px 15px;
    cursor: pointer;
    border-bottom: 1px solid #eee;
}

.accordion-body .location-established:hover {
    background: #f3f3f3;
    font-size: 13px;
    border-left: 3px solid #db4052;
}

.accordion-body .location-progress:hover {
    background: #f3f3f3;
    font-size: 13px;
    border-left: 3px solid  #2c3e50;;
}
/* .accordion-body .location-item .section-established:hover {
    background: #f3f3f3;
    font-size: 13px;
    border-left: 3px solid #db4052;
} */

.accordion-body .location-item {
    font-size: 13px;
    padding: 8px 15px;
    cursor: pointer;
    border-bottom: 1px solid #eee;
    background: #fff;
    transition: background 0.3s ease;
}
.custom-popup {
  font-size: 14px;
  color: #444;
  max-width: 250px;
}


</style>
@endsection


@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/network_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="background: #db4052;display: inline-block;font-size:4em;padding: 14px 50px;">{!! __('message.networks') !!}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services area start -->
    <section class="rs-services-area section-space rs-services-one p-relative">
        <div class="container">
            @include('company.pages.maps')
        </div>
    </section>
    
    <!-- services area end -->
@endsection

@section('script')

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map',{ scrollWheelZoom: false }).setView([-2.5489, 118.0149], 5); // Center Indonesia
  
    // Add a tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);
  
    // Marker data
    var locations = [
        {
            name: 'Surabaya',
            lat: -7.2575,
            lng: 112.7521,
            type: 'Established',
            info: `JL. Tenggilis Utara II No. 1<br>
                Prapen Indah Blok P1<br>
                Surabaya 60222<br>
                East Java - Indonesia<br>
                Phone 1: +62-31-99850204<br>
                Phone 2: +62-31-99850208<br>
                Fax: +62-31-99004285`
        },
        {
            name: 'Jakarta',
            lat: -6.2277,
            lng: 106.8326,
            type: 'Established',
            info: `Jl. HR. Rasuna Said<br>
                Blok X1, Kav 1-2<br>
                Jakarta 12950<br>
                DKI Jakarta - Indonesia<br>
                Phone : +62-21-52892321<br>
                Fax : +62-21-52892310`
        },
        {
            name: 'Samarinda',
            lat: -0.4911,
            lng: 117.1456,
            type: 'Established',
            info: `Jl. Raya Alaya, Block LE-21<br>
                Samarinda<br>
                East Kalimantan - Indonesia<br>
                Phone : +62-541-4100195<br>
                Fax : +62-541-7284523`
        },
        {
            name: 'Palembang',
            lat: -2.9761,
            lng: 104.7754,
            type: 'Established',
            info: `Komplek Ruko Golden Boulevard<br>
                Blok D 01 No. 01, Citra Grand City<br>
                South Sumatera - Indonesia<br>
                Phone : +62-711-5645549<br>
                Fax : +62-711-5640399`
        },
        {
            name: 'Pontianak',
            lat: -0.0263,
            lng: 109.3425,
            type: 'Established',
            info: `Komplek Royal Serdam 2 No. A1<br>
                Jln. Sungai Raya Dalam<br>
                Bangka Belitung - Pontianak<br>
                West Kalimantan - Indonesia<br>
                Phone 1: +62-561-6730299<br>
                Phone 2: +62-561-6730854<br>
                Fax: +62-561-6730854`
        },
        {
            name: 'Banjarmasin',
            lat: -3.3194,
            lng: 114.5908,
            type: 'Established',
            info: `Komplek Citraland, The Escapade A01/08<br>
                Jl. Ahmad Yani Km 7, Pemurus Luar, 70654<br>
                Banjarmasin Timur, South Kalimantan<br>
                Telp : 0511-6773900<br>
                Fax : 0511-6773900`
        },
        {
            name: 'Semarang',
            lat: -6.9667,
            lng: 110.4167,
            type: 'On Progress',
            info: 'Semarang (Coming Soon)'
        },
        {
            name: 'Riau',
            lat: 0.5071,
            lng: 101.4478,
            type: 'On Progress',
            info: 'Riau (Coming Soon)'
        },
        {
            name: 'Central Kalimantan',
            lat: -1.6815,
            lng: 113.3824,
            type: 'On Progress',
            info: 'Central Kalimantan (Coming Soon)'
        },
        {
            name: 'North Kalimantan',
            lat: 3.0731,
            lng: 116.0414,
            type: 'On Progress',
            info: 'North Kalimantan (Coming Soon)'
        },
        {
            name: 'Makassar & Palu',
            lat: -2.5,
            lng: 120.0,
            type: 'On Progress',
            info: 'Makassar & Palu (Coming Soon)'
        },
        {
            name: 'Medan',
            lat: 3.5952,
            lng: 98.6722,
            type: 'On Progress',
            info: 'Medan (Coming Soon)'
        },
        {
            name: 'Lampung',
            lat: -5.45,
            lng: 105.2667,
            type: 'On Progress',
            info: 'Lampung (Coming Soon)'
        }
    ];
  
    // Store marker references
    const markerRefs = {};
  
    // Add markers
    locations.forEach(loc => {
      var marker = L.marker([loc.lat, loc.lng], {
        icon: L.icon({
          iconUrl: loc.type === 'Established' ? 'https://maps.gstatic.com/mapfiles/ms2/micons/red-dot.png' : 'https://maps.gstatic.com/mapfiles/ms2/micons/purple-dot.png',
          iconSize: [32, 32]
        })
      }).addTo(map);
  
      marker.bindPopup(`<b>${loc.name}</b><br>${loc.info}`, {
        className: 'custom-popup'
        });

        marker.on('click', () => {
            map.flyTo([loc.lat, loc.lng], 8, {
            duration: 1.5
            });
            marker.openPopup();
        });
      markerRefs[loc.name] = marker;
    });
  
    // Sidebar click event
    document.querySelectorAll('.location-item').forEach(item => {
      item.addEventListener('click', function () {
        const name = this.getAttribute('data-name');
        const marker = markerRefs[name];
        if (marker) {
          map.flyTo(marker.getLatLng(), 8);
          marker.openPopup();
        }
      });
    });

   
</script>

@endsection

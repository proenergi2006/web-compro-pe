<div class="row">
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Total Published Articles </h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="file-text"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $data['total_published'] }}</h1>
                        </div>
                    </div>
                   
                </div>
                <div class="col-sm-6">
                     <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Total Drafted Articles </h5>
                                </div>
                                <div class="col-auto">
                                    <div class="stat text-warning">
                                        <i class="align-middle" data-feather="bookmark"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $data['total_drafted'] }}</h1>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-xxl-12">
        <div class="card flex-fill w-100">
            <div class="card-header">

                <h5 class="card-title mb-0">Recent Movement</h5>
            </div>
            <div class="card-body py-3">
                <div class="chart chart-sm">
                    <canvas id="chartjs-dashboard-line"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

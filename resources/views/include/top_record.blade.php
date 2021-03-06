<div class="row">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-info">
                <div class="inner">
                    <h3>{{ $kasus->total_case }}
                        @if($kasus->new_case > 0)
                        <sup style="font-size: 15px; top: -15px"><i class="fas fa-arrow-up"></i> {{ $kasus->new_case }}</sup>
                        @endif
                    </h3>

                    <p>Total Kasus</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hospital-alt"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $kasus->total_recovered }}
                        @php
                            $yesterday_recovered = \App\Kasus::whereDate('created_at', \Carbon\Carbon::yesterday())->latest()->first()->total_recovered;
                        @endphp
                        @if($selisih_recovered = $yesterday_recovered - $kasus->total_recovered > 0)
                            <sup style="font-size: 15px; top: -15px"><i class="fas fa-arrow-up"></i> {{ $selisih_recovered }}</sup>
                        @endif
                    </h3>

                    <p>Total Sembuh</p>
                </div>
                <div class="icon">
                    <i class="fas fa-heart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-warning">
                <div class="inner">
                    <h3>{{ $kasus->critical_case }}</h3>

                    <p>Total Kritis</p>
                </div>
                <div class="icon">
                    <i class="fas fa-ambulance"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-danger">
                <div class="inner">
                    <h3>{{ $kasus->total_death }}
                        @if($kasus->new_death > 0)
                        <sup style="font-size: 15px; top: -15px"><i class="fas fa-arrow-up"></i> {{ $kasus->new_death }}</sup>
                        @endif
                    </h3>

                    <p>Total Meninggal</p>
                </div>
                <div class="icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>

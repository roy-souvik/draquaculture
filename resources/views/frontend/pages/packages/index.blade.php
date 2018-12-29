@extends('frontend.layouts.master')

@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Product Packages</h2>
                    <div class="page_link">
                        <a href="{{ route('public.home') }}">Home</a>
                        <a href="#">Product Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    <section class="tracking_box_area p_120">
        <div class="container">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th> <h4> TYPE 001 </h4> </th>
                        <th> <h4> TYPE 002 </h4> </th>
                        <th> <h4> TYPE 003 </h4> </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td> PVC TARPAULIN TANK (with Geo membrane sheet) DIA 2MX1.2M </td>
                        <td> PVC TARPAULIN TANK (with Geo membrane sheet) DIA 3MX1.2M </td>
                        <td> PVC TARPAULIN TANK (with Geo membrane sheet) DIA 4MX1.2M </td>
                    </tr>

                    <tr>
                        <td> AIR BLOWER RESUN Model No.LP100 </td>
                        <td> AIR BLOWER RESUN Model No.LP100 </td>
                        <td> AIR BLOWER RESUN Model No.LP100 </td>
                    </tr>

                    <tr>
                        <td> AIR STONE  </td>
                        <td> AIR STONE  </td>
                        <td> AIR STONE  </td>
                    </tr>

                    <tr>
                        <td> SILICONE AIR PIPE  </td>
                        <td> SILICONE AIR PIPE  </td>
                        <td> SILICONE AIR PIPE  </td>
                    </tr>

                    <tr>
                        <td> ZIP TIES </td>
                        <td> ZIP TIES </td>
                        <td> ZIP TIES </td>
                    </tr>

                    <tr>
                        <td> SILICONE AIR PIPE CONNECTORS AND CONTROLLERS </td>
                        <td> SILICONE AIR PIPE CONNECTORS AND CONTROLLERS </td>
                        <td> SILICONE AIR PIPE CONNECTORS AND CONTROLLERS </td>
                    </tr>

                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                    </tr>

                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                    </tr>

                    <tr>
                        <td> Capacity of tank 5000 ltrs (appox) </td>
                        <td> Capacity of tank 7000 ltrs (appox) </td>
                        <td> Capacity of tank 10000 ltrs (appox) </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>

@endsection

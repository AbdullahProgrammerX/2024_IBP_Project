<?php $__env->startSection('title', 'Yönetici Sayfası'); ?>


<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hoş geldiniz <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admin</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?php echo e($books); ?></h3>
                                <p>Kitpa Sayısı</p>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php echo e($users); ?><sup style="font-size: 20px">%</sup></h3>
                                <p>Kullanıcı Sayısı</p>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?php echo e($categories); ?></h3>

                                <p>Kategoriler Sayısı</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="card bg-gradient-success">
                            <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                                <h3 class="card-title">
                                    <i class="far fa-calendar-alt"></i>
                                    Calendar
                                </h3>
                                <!-- tools card -->
                                <div class="card-tools">
                                    <!-- button with a dropdown -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-toggle="dropdown" data-offset="-52">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a href="#" class="dropdown-item">Add new event</a>
                                            <a href="#" class="dropdown-item">Clear events</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">View calendar</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <!--The calendar -->
                                <div id="calendar" style="width: 100%">
                                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                        <ul class="list-unstyled">
                                            <li class="show">
                                                <div class="datepicker">
                                                    <div class="datepicker-days" style="">
                                                        <table class="table table-sm">
                                                            <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Month"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Month">May 2024
                                                                </th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Month"></span></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="dow">Su</th>
                                                                <th class="dow">Mo</th>
                                                                <th class="dow">Tu</th>
                                                                <th class="dow">We</th>
                                                                <th class="dow">Th</th>
                                                                <th class="dow">Fr</th>
                                                                <th class="dow">Sa</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="04/28/2024"
                                                                    class="day old weekend">28
                                                                </td>
                                                                <td data-action="selectDay" data-day="04/29/2024"
                                                                    class="day old">29
                                                                </td>
                                                                <td data-action="selectDay" data-day="04/30/2024"
                                                                    class="day old">30
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/01/2024"
                                                                    class="day">1
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/02/2024"
                                                                    class="day">2
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/03/2024"
                                                                    class="day">3
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/04/2024"
                                                                    class="day weekend">4
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="05/05/2024"
                                                                    class="day weekend">5
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/06/2024"
                                                                    class="day">6
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/07/2024"
                                                                    class="day">7
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/08/2024"
                                                                    class="day">8
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/09/2024"
                                                                    class="day">9
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/10/2024"
                                                                    class="day">10
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/11/2024"
                                                                    class="day weekend">11
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="05/12/2024"
                                                                    class="day weekend">12
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/13/2024"
                                                                    class="day">13
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/14/2024"
                                                                    class="day">14
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/15/2024"
                                                                    class="day">15
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/16/2024"
                                                                    class="day">16
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/17/2024"
                                                                    class="day">17
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/18/2024"
                                                                    class="day weekend">18
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="05/19/2024"
                                                                    class="day weekend">19
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/20/2024"
                                                                    class="day">20
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/21/2024"
                                                                    class="day">21
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/22/2024"
                                                                    class="day">22
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/23/2024"
                                                                    class="day">23
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/24/2024"
                                                                    class="day">24
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/25/2024"
                                                                    class="day weekend">25
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="05/26/2024"
                                                                    class="day weekend">26
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/27/2024"
                                                                    class="day active today">27
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/28/2024"
                                                                    class="day">28
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/29/2024"
                                                                    class="day">29
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/30/2024"
                                                                    class="day">30
                                                                </td>
                                                                <td data-action="selectDay" data-day="05/31/2024"
                                                                    class="day">31
                                                                </td>
                                                                <td data-action="selectDay" data-day="06/01/2024"
                                                                    class="day new weekend">1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="06/02/2024"
                                                                    class="day new weekend">2
                                                                </td>
                                                                <td data-action="selectDay" data-day="06/03/2024"
                                                                    class="day new">3
                                                                </td>
                                                                <td data-action="selectDay" data-day="06/04/2024"
                                                                    class="day new">4
                                                                </td>
                                                                <td data-action="selectDay" data-day="06/05/2024"
                                                                    class="day new">5
                                                                </td>
                                                                <td data-action="selectDay" data-day="06/06/2024"
                                                                    class="day new">6
                                                                </td>
                                                                <td data-action="selectDay" data-day="06/07/2024"
                                                                    class="day new">7
                                                                </td>
                                                                <td data-action="selectDay" data-day="06/08/2024"
                                                                    class="day new weekend">8
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-months" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Year"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Year">2024
                                                                </th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Year"></span></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectMonth"
                                                                                      class="month">Jan</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Feb</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Mar</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Apr</span><span
                                                                        data-action="selectMonth" class="month active">May</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Jun</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Jul</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Aug</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Sep</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Oct</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Nov</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Dec</span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-years" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Decade"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Decade">2020-2029
                                                                </th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Decade"></span></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectYear"
                                                                                      class="year old">2019</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2020</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2021</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2022</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2023</span><span
                                                                        data-action="selectYear" class="year active">2024</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2025</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2026</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2027</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2028</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2029</span><span
                                                                        data-action="selectYear"
                                                                        class="year old">2030</span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-decades" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Century"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5">2000-2090
                                                                </th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Century"></span></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectDecade"
                                                                                      class="decade old"
                                                                                      data-selection="2006">1990</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2006">2000</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2016">2010</span><span
                                                                        data-action="selectDecade" class="decade active"
                                                                        data-selection="2026">2020</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2036">2030</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2046">2040</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2056">2050</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2066">2060</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2076">2070</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2086">2080</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2096">2090</span><span
                                                                        data-action="selectDecade" class="decade old"
                                                                        data-selection="2106">2100</span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="picker-switch accordion-toggle"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">US-Visitors Report</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="d-md-flex">
                                    <div class="p-1 flex-fill" style="overflow: hidden">
                                        <!-- Map will be created here -->
                                        <div id="world-map-markers" style="height: 325px; overflow: hidden"
                                             class="mapael">
                                            <div class="map">
                                                <svg height="318.5096371220021" version="1.1" width="515.094"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     style="overflow: hidden; position: relative; left: -0.5px; top: -0.734375px;"
                                                     viewBox="0 0 959 593" preserveAspectRatio="xMinYMin">
                                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created
                                                        with Raphaël 2.3.0 and Mapael undefined
                                                        (https://www.vincentbroute.fr/mapael/)
                                                    </desc>
                                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M233.08751,519.30948L235.02744,515.75293L237.29070000000002,515.42961L237.61402,516.23791L235.51242000000002,519.30948L233.08751,519.30948ZM243.27217000000002,515.59127L249.41530000000003,518.1778400000001L251.51689000000002,517.8545200000001L253.13350000000003,513.9746500000001L252.48686000000004,510.5797700000001L248.28366000000003,510.0947900000001L244.24213000000003,511.8730600000001L243.27217000000005,515.5912700000001ZM273.9878,525.61427L277.706,531.1107400000001L280.13092,530.7874200000001L281.26255,530.3024400000002L282.7175,531.5957300000001L286.43571,531.4340700000001L287.40567999999996,529.9791200000001L284.49576999999994,528.2008500000001L282.55583999999993,524.4826300000001L280.4542399999999,520.92609L274.6344399999999,523.83599L273.98779999999994,525.61427ZM294.19545,534.5056400000001L295.48874,532.5657000000001L300.17691,533.5356600000001L300.82356000000004,533.0506800000002L306.96668000000005,533.6973200000002L306.64336000000003,534.9906200000003L304.05678,536.4455600000002L299.69193,536.1222400000003L294.19545,534.5056400000003ZM299.53027,539.67879L301.47020999999995,543.55866L304.54175999999995,542.4270300000001L304.86508999999995,540.81041L303.24848,538.7088200000001L299.53027,538.3855000000001L299.53027,539.67879ZM306.4817,538.5471600000001L308.74496,535.6372600000001L313.43313,538.0621800000001L317.79798,539.1938100000001L322.16284,541.9420500000001L322.16284,543.8819800000001L318.60630000000003,545.6602600000001L313.75645000000003,546.6302200000001L311.33154,545.1752700000001L306.48170000000005,538.5471600000001ZM323.13281,554.06663L324.74942,552.77335L328.14430999999996,554.3899700000001L335.74237999999997,557.9465100000001L339.13726999999994,560.0481000000001L340.75386999999995,562.4730200000001L342.6938099999999,566.8378700000002L346.73533999999995,569.4244500000002L346.4120199999999,570.7177500000003L342.53214999999994,573.9509700000002L338.32895999999994,575.4059200000003L336.87400999999994,574.7592800000002L333.80243999999993,576.5375400000003L331.3775299999999,579.7707700000003L329.1142699999999,582.6806700000003L327.3359899999999,582.5190100000003L323.77944999999994,579.9324300000003L323.4561299999999,575.4059200000003L324.1027699999999,572.9810000000002L322.4861599999999,567.3228600000002L320.3845599999999,565.5445800000002L320.2228999999999,562.9580000000002L322.4861599999999,561.9880400000002L324.58775999999995,558.9164800000002L325.07273999999995,557.9465100000002L323.45613,556.1682300000002L323.13280999999995,554.0666300000003Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="HI"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M158.07671,453.67502L157.75339,539.03215L159.36999,540.00211L162.44156,540.16377L163.8965,539.03215L166.48308,539.03215L166.64475,541.94205L173.59617999999998,548.73182L174.08117,551.3184L177.47605,549.37846L178.12269999999998,549.2168L178.44601999999998,546.1452400000001L179.90095999999997,544.52863L181.03259999999997,544.36697L182.97252999999998,542.91201L186.04408999999998,545.01361L186.69073999999998,547.9235199999999L188.63066999999998,549.0551399999999L189.76229999999998,551.48006L193.64218,553.25833L197.03706,559.2398L199.78529,563.11966L202.04855,565.8679099999999L203.50351,569.58611L208.51500000000001,571.36439L213.68817,573.46598L214.65813,577.83084L215.14311,580.9024L214.17315000000002,584.29729L212.39487000000003,586.56054L210.77826000000002,585.7522399999999L209.32331000000002,582.68067L206.57507,581.22573L204.79680000000002,580.09409L203.98849,580.9024000000001L205.44344,583.65065L205.60510000000002,587.3688500000001L204.47347000000002,587.85383L202.53354000000002,585.9139L200.43195000000003,584.62061L200.91693000000004,586.2372200000001L202.21021000000005,588.0155000000001L201.40191000000004,588.8238000000001C201.40191000000004,588.8238000000001,200.59361000000004,588.5004800000002,200.10863000000003,587.8538300000001C199.62363000000002,587.2071900000001,198.00703000000004,584.4589500000002,198.00703000000004,584.4589500000002L197.03706000000005,582.1956900000002C197.03706000000005,582.1956900000002,196.71374000000006,583.4889800000002,196.06709000000006,583.1656500000003C195.42044000000007,582.8423300000003,194.77380000000005,581.7107100000003,194.77380000000005,581.7107100000003L196.55207000000004,579.7707700000003L195.09712000000005,578.3158200000003L195.09712000000005,573.3043200000003L194.28882000000004,573.3043200000003L193.48052000000004,576.6992000000002L192.34888000000004,577.1842000000003L191.37892000000005,573.4659800000003L190.73227000000006,569.7477700000003L189.92396000000005,569.2627900000003L190.24729000000005,574.9209400000003L190.24729000000005,576.0525600000003L188.79233000000005,574.7592800000003L185.23579000000004,568.7778100000004L183.13419000000005,568.2928300000004L182.48755000000006,564.5746200000004L180.87094000000005,561.6647200000004L179.25432000000004,560.5330800000005L179.25432000000004,558.2698300000005L181.35592000000003,556.9765400000006L180.87094000000002,556.6532200000006L178.28436000000002,557.2998600000006L174.88947000000002,554.8749500000007L172.30289000000002,551.9650400000007L167.45306000000002,549.3784600000007L163.41152000000002,546.7918800000007L164.70482,543.5586600000007L164.70482,541.9420500000007L162.92654000000002,543.5586600000007L160.01664000000002,544.6902900000007L156.29843000000002,543.5586600000007L150.64028000000002,541.1337500000008L145.14381000000003,541.1337500000008L144.49717000000004,541.6187300000007L138.03072000000003,537.7388500000008L135.92912000000004,537.4155300000008L133.18088000000003,531.5957300000008L129.62433000000004,531.9190500000008L126.06778000000004,533.3740000000008L126.55277000000004,537.9005200000008L127.68439000000004,534.9906200000008L128.65437000000003,535.3139400000008L127.19941000000003,539.6787900000008L130.43263000000002,536.9305500000008L131.07928,538.5471600000009L127.19941000000001,542.9120100000009L125.90612000000002,542.588690000001L125.42114000000002,540.648750000001L124.12785000000002,539.8404500000009L122.83456000000002,540.9720800000009L120.08632000000003,539.1938100000009L117.01475000000003,541.2954100000009L115.23649000000003,543.3970000000008L111.84160000000003,545.4986000000008L107.15342000000003,545.3369300000008L106.66844000000003,543.2353400000009L110.38664000000003,542.5886900000008L110.38664000000003,541.2954100000009L108.12338000000003,540.6487500000009L109.09336000000003,538.2238400000009L111.35661000000003,534.3439700000009L111.35661000000003,532.5657000000009L111.51827000000003,531.7573900000009L115.88313000000002,529.494130000001L116.85309000000002,530.7874200000009L119.60134000000002,530.7874200000009L118.30805000000002,528.2008500000009L114.58983000000002,527.8775200000008L109.57834000000003,530.6257600000008L107.15342000000003,534.0206400000008L105.37515000000002,536.6072300000008L104.24352000000002,538.8704900000007L100.04033000000001,540.3254300000007L96.96876000000002,542.9120100000007L96.64543900000001,544.5286300000007L98.908696,545.4986000000007L99.717009,547.6001800000007L96.96876,550.8334100000008L90.50232100000001,555.0366100000008L82.742574,559.2398000000007L80.640977,560.3714200000007L75.30615900000001,561.5030600000007L69.97133300000002,563.7663100000007L71.74960800000001,565.0596000000006L70.29465400000001,566.5145500000007L69.809672,567.6461800000006L67.061434,566.6762100000007L63.828214,566.8378700000006L63.019902,569.1011300000006L62.049939,569.1011300000006L62.37326,566.6762100000005L58.816709,567.9695100000006L55.90681,568.9394700000006L52.511924,567.6461800000006L49.602023,569.5861100000006L46.368799,569.5861100000006L44.267202000000005,570.8794100000007L42.65059000000001,571.6877100000007L40.548995000000005,571.3643900000008L37.96241500000001,570.2327600000008L35.699158000000004,570.8794100000008L34.72919100000001,571.8493700000008L33.112578000000006,570.7177500000008L33.112578000000006,568.7778100000008L36.18414200000001,567.4845200000009L42.488929000000006,568.1311700000009L46.85378200000001,566.5145500000009L48.95537800000001,564.4129600000009L51.86528000000001,563.7663100000009L53.64355300000001,562.9580000000009L56.39179400000001,563.1196600000009L58.00840600000001,564.4129600000009L58.97836900000001,564.0896400000009L61.24162600000001,561.3414000000009L64.313196,560.371420000001L67.708076,559.7247800000009L69.00137000000001,559.401460000001L69.64801200000001,559.8864400000009L70.45632400000001,559.8864400000009L71.74960800000001,556.1682300000009L75.79114100000001,554.7132900000009L77.73107700000001,550.9950800000009L79.99433600000002,546.4685600000009L81.61095100000001,545.0136100000009L81.93427200000002,542.4270300000009L80.31765700000003,543.7203200000008L76.92276400000003,544.3669700000008L76.27612200000003,541.9420500000008L74.98283800000003,541.6187300000008L74.01286500000003,542.5886900000008L73.85120500000004,545.4986000000008L72.39625000000004,545.3369300000008L70.94130600000004,539.5171300000009L69.64801200000004,540.8104100000008L68.51638800000003,540.3254300000009L68.19306800000004,538.3855000000009L64.15153500000004,538.5471600000009L62.04993900000004,539.6787900000008L59.463361000000035,539.3554700000009L60.91830500000003,537.9005200000008L61.40328600000003,535.3139400000008L60.75664500000003,533.3740000000008L62.21159900000003,532.4040400000008L63.50488300000003,532.2423800000008L62.85824100000003,530.4641000000008L62.85824100000003,526.0992500000008L61.88827800000003,525.1292800000008L61.07996600000003,526.5842300000008L54.936843000000025,526.5842300000008L53.48189200000002,525.2909400000009L52.835247000000024,521.4110800000009L50.73365100000002,517.8545200000009L50.73365100000002,516.8845600000009L52.835247000000024,516.0762500000009L52.996908000000026,513.9746500000009L54.128536000000025,512.8430300000009L53.32023100000003,512.358050000001L52.02694100000003,512.8430300000009L50.89531300000003,510.0947900000009L51.86528000000003,505.0832800000009L56.391794000000026,501.8500700000009L58.97836900000003,500.2334500000009L60.91830500000003,496.5152500000009L63.66655400000003,495.2219500000009L66.25313200000004,496.3535900000009L66.57645300000004,498.7785100000009L69.00137000000004,498.4551700000009L72.23459000000004,496.0302600000009L73.85120500000004,496.67691000000093L74.82116700000003,497.3235500000009L76.43778200000003,497.3235500000009L78.70104100000003,496.0302600000009L79.50935400000003,491.6654000000009C79.50935400000003,491.6654000000009,79.83267500000004,488.75551000000087,80.47931700000004,488.2705200000009C81.12595900000004,487.7855400000009,81.44928000000004,487.30056000000087,81.44928000000004,487.30056000000087L80.31765700000004,485.3606200000009L77.73107700000004,486.1689300000009L74.49784700000004,486.9772300000009L72.55791100000003,486.49225000000087L69.00137000000004,484.71397000000087L63.98987500000004,484.5523100000009L60.43332400000004,480.83411000000086L60.91830500000004,476.9542400000009L61.56495700000004,474.5293200000009L59.46336100000004,472.7510500000009L57.523423000000044,469.0328300000009L58.00840600000004,468.2245300000009L64.79817700000004,467.7395500000009L66.89977300000004,467.7395500000009L67.86973600000005,468.70951000000093L68.51638800000005,468.70951000000093L68.35472800000005,467.09290000000095L72.23459000000005,466.44626000000096L74.82116700000006,466.769580000001L76.27612200000006,467.90121000000096L74.82116700000006,470.002810000001L74.33618600000005,471.457750000001L77.08443500000006,473.074370000001L82.09593200000006,474.85264000000103L83.87420800000007,473.882680000001L81.61095100000007,469.517830000001L80.64097700000008,466.28460000000103L81.61095100000007,465.47629000000103L78.21606000000007,463.536360000001L77.73107700000007,462.404720000001L78.21606000000007,460.788120000001L77.40775600000006,456.90825000000103L74.49784700000006,452.22007000000104L72.07292900000006,448.01688000000104L74.98283800000006,446.07694000000106L78.21606000000006,446.07694000000106L79.99433600000006,446.7235900000011L84.19752800000006,446.5619300000011L87.91573300000006,443.0053900000011L89.04736600000005,439.9338200000011L92.76557800000005,437.5089000000011L94.38218200000004,438.4788700000011L97.13042100000004,437.8322200000011L100.84863000000004,435.73062000000107L101.98027000000005,435.5689600000011L102.95023000000005,436.37728000000106L107.47674000000005,436.21561000000105L110.22498000000004,433.1440500000011L111.35661000000005,433.1440500000011L114.91316000000005,435.5689600000011L116.85309000000005,437.6705600000011L116.36811000000006,438.8021900000011L117.01475000000006,439.93382000000105L118.63137000000006,438.31721000000107L122.51124000000006,438.6405300000011L122.83456000000005,442.3587300000011L124.77450000000005,443.81369000000115L131.88759000000005,444.46033000000114L138.19238000000004,448.66352000000114L139.64732000000004,447.6935600000011L144.82049000000004,450.28014000000115L146.92208000000002,449.63350000000116L148.86202000000003,448.8251800000012L153.71185000000003,450.76512000000116L158.07671000000002,453.67502000000115ZM42.973912999999996,482.61238000000003L45.075509,487.9472L44.913847,488.91717L42.003944999999995,488.59384L40.225671999999996,484.55231L38.447399,483.09736999999996L36.022479999999995,483.09736999999996L35.86082,480.51077999999995L37.639092999999995,478.08585999999997L38.77072199999999,480.51077999999995L40.22567199999999,481.96572999999995L42.97391299999999,482.61238ZM40.387333,516.0762500000001L44.105542,516.8845600000001L47.823749,517.8545200000001L48.632056,518.8245000000001L47.015444,522.5427000000001L43.94388,522.3810400000001L40.548995,518.8245000000001L40.387333,516.0762500000001ZM19.694696999999998,502.01173000000006L20.826327,504.59830000000005L21.957955,506.21492000000006L20.826327,507.02322000000004L18.72473,503.95166000000006L18.72473,502.01173000000006L19.694697,502.01173000000006ZM5.953494299999997,575.0826000000001L9.348379599999998,572.8193400000001L12.743264999999997,571.8493700000001L15.329844999999997,572.1726900000001L15.814827999999997,573.7893000000001L17.754762999999997,574.2742900000002L19.694696999999998,572.3343600000002L19.371374999999997,570.7177500000001L22.119615999999997,570.0711000000001L25.029517999999996,572.6576800000001L23.897888999999996,574.4359500000002L19.533036999999997,575.5675800000001L16.784794999999995,575.0826000000002L13.066587999999996,573.9509700000002L8.701734699999996,575.4059200000003L7.085122699999996,575.7292400000002L5.953494299999996,575.0826000000002ZM54.936842999999996,570.55609L56.553455,572.49602L58.655048,570.87941L57.2001,569.58611L54.936842999999996,570.5560899999999ZM57.846745,573.62764L58.978369,571.3643900000001L61.079966,571.68771L60.271663,573.62764L57.846745,573.62764ZM81.44928,571.68771L82.904234,573.4659800000001L83.874208,572.3343600000001L83.065895,570.3944200000001L81.44928,571.68771ZM90.17899,559.2398000000001L91.31062299999999,565.0596L94.22052199999999,565.86791L99.23201699999998,562.9580000000001L103.59686999999998,560.3714200000001L101.98026999999998,557.9465100000001L102.46524999999997,555.5215900000001L100.36364999999996,556.81488L97.45375199999997,556.00657L99.07035699999997,554.87495L101.01028999999997,555.68325L104.89015999999997,553.90497L105.37514999999996,552.4500300000001L102.95022999999996,551.6417200000001L103.75852999999996,549.7017800000001L101.01028999999997,551.6417200000001L96.32211799999997,555.1982700000001L91.47228399999997,558.1081700000001L90.17898999999997,559.2398000000001ZM132.53423,539.3554700000001L134.95915000000002,537.90052L133.98918000000003,536.12224L132.21091000000004,537.09221L132.53423000000004,539.35547Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="AK"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M759.8167,439.1428L762.08236,446.4614L765.81206,456.20366L771.14685,465.57996L774.86504,471.88472L779.71486,477.38118000000003L783.7563700000001,481.09937L785.37297,484.00926000000004L784.24135,485.30254L783.43305,486.59582L786.34293,494.03221L789.25282,496.94209L791.8393900000001,502.27689L795.39592,508.09666999999996L799.92241,516.3413499999999L801.2157,523.9393899999999L801.7006799999999,535.9022699999999L802.34732,537.68053L802.024,541.0754L799.59909,542.3686899999999L799.92241,544.3086099999999L799.27577,546.2485399999999L799.5990899999999,548.6734399999999L800.0840699999999,550.6133699999999L797.3358499999999,553.8465799999999L794.2642999999999,555.3015199999999L790.3844499999999,555.4631799999999L788.9294999999998,557.0797899999999L786.5045999999999,558.0497499999999L785.2113099999999,557.56477L784.0796899999999,556.5948099999999L783.75637,553.6849199999999L782.9480599999999,550.29005L779.55319,545.11691L775.99666,542.85367L772.11681,542.53035L771.30851,543.82363L768.23696,539.4588L767.5903199999999,535.90227L765.0037499999999,531.86076L763.2254899999998,530.72913L761.6088799999998,532.83072L759.8306199999997,532.5074000000001L757.7290299999997,527.4959200000001L754.8191399999997,523.61607L751.9092499999997,518.28128L749.3226899999997,515.20973L745.7661599999998,511.49154000000004L747.8677399999998,509.06663000000003L751.1009499999998,503.57017L750.9392899999998,501.95357L746.4127999999998,500.98361L744.7961899999998,501.63025L745.1195199999999,502.27689L747.7060799999998,503.24685L746.2511399999999,507.77335L745.4428399999998,508.25833L743.6645699999998,504.21682L742.3712899999998,499.36699999999996L742.0479699999999,496.61877L743.5029099999998,491.93062L743.5029099999998,482.39265L740.4313599999998,478.67446L739.1380799999998,475.60291L733.9649399999998,474.30963L732.0250199999998,473.66299000000004L730.4084099999998,471.07642000000004L727.0135399999998,469.45981000000006L725.8819199999998,466.06494000000004L723.1336899999998,465.09498L720.7087799999998,461.37679L716.5056099999998,459.92185L713.5957199999998,458.4669L711.0091599999998,458.4669L706.9676399999998,459.27521L706.8059799999999,461.21513L707.6142899999999,462.18509L707.1292999999998,463.31672L704.0577599999998,463.15506L700.3395699999998,466.71159L696.7830299999997,468.65151L692.9031799999997,468.65151L689.6699699999997,469.9448L689.3466499999997,467.19657L687.7300499999998,465.25664L684.8201599999998,464.12502L683.2035599999998,462.67007L675.1205299999998,458.79022000000003L667.5224899999998,457.01196000000004L663.1576599999999,457.65860000000004L657.1762199999998,458.14358000000004L651.1947799999998,460.24517000000003L647.7155399999998,460.85813L647.4776199999998,452.80838L644.8910499999997,450.86846L643.1127799999997,449.09019L643.4360999999997,446.01863000000003L653.6207199999997,444.72535000000005L679.1631199999997,441.81546000000003L685.9528699999997,441.16882000000004L691.3888699999998,441.44909L693.9754399999998,445.32895L695.4303799999998,446.78389000000004L703.5285399999998,447.29911000000004L714.3482899999998,446.65247000000005L735.8606799999998,445.35918000000004L741.3063999999998,444.68481L746.4139799999998,444.88932000000005L746.8408099999998,447.7992100000001L749.0738099999998,448.60751000000005L749.3087499999998,443.97751000000005L747.7805299999998,439.80456000000004L749.0889299999998,438.36473000000007L754.6435599999998,438.81948000000006L759.8166999999997,439.1428000000001ZM772.3621099999999,571.5478800000001L774.78703,570.90124L776.0803099999999,570.65875L777.53527,568.31466L779.8793499999999,566.69805L781.1726399999999,567.18304L782.8700799999999,567.50636L783.2742299999999,568.55715L779.7985299999999,569.76961L775.5953299999999,571.22456L773.2512499999999,572.43702L772.3621099999999,571.54788ZM785.8608099999999,566.5363900000001L787.0732699999999,567.5871900000001L789.8215099999999,565.4856000000001L795.1563199999998,561.2824100000001L798.8745199999998,557.4025400000002L801.3802699999999,550.7744400000001L802.3502399999999,549.0770000000001L802.5118999999999,545.6821200000002L801.7844199999998,546.1671000000001L800.8144599999998,548.9961700000001L799.3594999999998,553.6035000000002L796.1262799999998,558.8575000000002L791.7614399999999,563.0606800000002L788.3665599999999,565.0006100000002L785.8608099999999,566.5363900000002Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="FL"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M880.79902,142.42476L881.6680200000001,141.34825999999998L882.7582400000001,138.05723999999998L880.2151600000001,137.14377L879.73017,134.07220999999998L875.85032,132.94059L875.527,130.19234999999998L868.25225,106.75152999999997L863.65083,92.20854199999998L862.7537500000001,92.20344199999998L862.10711,93.82004699999999L861.46047,93.33506599999998L860.4905,92.36510299999998L859.03556,94.30502799999998L858.98706,99.33708199999998L859.29871,105.00429999999999L861.2386300000001,107.75253999999998L861.2386300000001,111.79405999999999L857.52043,116.85683999999999L854.93386,117.98848L854.93386,119.1201L856.06549,120.89837L856.06549,129.46639L855.25718,138.68106L855.09552,143.53088L856.06549,144.82417999999998L855.90383,149.35066999999998L855.4188399999999,151.12894999999997L856.3876499999999,151.83816999999996L873.1753199999999,147.41361999999995L875.35019,146.81116999999995L877.19376,144.03783999999996L880.79899,142.42471999999995Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="NH"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M581.61931,82.059006L583.4483,80.001402L585.62022,79.201221L590.99286,75.314624L593.27908,74.743065L593.73634,75.200319L588.59232,80.344339L585.27728,82.287628L583.21967,83.202124L581.61931,82.059006ZM667.79369,114.18719L668.44033,116.69293L671.67355,116.85459L672.96684,115.64213C672.96684,115.64213,672.88601,114.18719,672.56269,114.02552C672.23936,113.86386,670.94608,112.16642,670.94608,112.16642L668.76366,112.40891L667.14704,112.57057L666.82372,113.7022L667.79369,114.18719ZM567.49209,111.21318L568.20837,110.63278L570.9566,109.82447L574.51313,107.56123L574.51313,106.59126L575.15978,105.94462L581.14121,104.97466L583.56612,103.03473L587.93095,100.93315L588.09261,99.639864L590.03254,96.729975L591.8108,95.921673L593.10409,94.143408L595.36733,91.880161L599.73217,89.455254L604.42032,88.970273L605.55194,90.101896L605.22862,91.071859L601.51043,92.041822L600.05549,95.113371L597.79224,95.921673L597.30726,98.34658L594.88235,101.57979L594.55903,104.16636L595.36733,104.65134L596.3373,103.51972L599.89383,100.60983L601.18711,101.90311L603.45036,101.90311L606.68357,102.87307L608.13851,104.0047L609.59345,107.07625L612.34168,109.82447L616.22153,109.66281L617.67648,108.69285L619.29308,109.98613L620.90969,110.47112L622.20297,109.66281L623.33459,109.66281L624.9512,108.69285L628.99271,105.13632L632.38758,104.0047L639.01566,103.68138L643.54215,101.74145L646.12872,100.44817L647.58367,100.60983L647.58367,106.26794L648.06865,106.59126L650.97853,107.39957L652.91846,106.91458L659.06156,105.29798L660.19318,104.16636L661.64813,104.65134L661.64813,111.60274L664.88134,114.67429L666.17462,115.32093L667.4679,116.29089L666.17462,116.61421L665.36632,116.29089L661.64813,115.80591L659.54654,116.45255L657.28329,116.29089L654.05008,117.74584L652.27182,117.74584L646.45204,116.45255L641.27891,116.61421L639.33898,119.20078L632.38758,119.84742L629.96267,120.65572L628.83105,123.72727L627.53777,124.8589L627.05279,124.69724L625.59784,123.08063L621.07135,125.50554L620.42471,125.50554L619.29308,123.88893L618.48478,124.05059L616.54486,128.41543L615.57489,132.45694L612.39377,139.45774L611.21701,138.42347L609.84527,137.39215L607.90449,127.10413L604.36001,125.73408L602.30743,123.44785L590.18707,120.70437L587.3318,119.67473L579.10138,117.50199L571.21139,116.35887L567.49209,111.21318ZM697.8,177.2L694.6,168.9L692.3,159.9L689.9,156.7L687.3,154.9L685.7,156L681.8,157.8L679.9,162.8L677.1,166.5L676,167.2L674.5,166.5C674.5,166.5,671.9,165.1,672.1,164.4C672.3,163.8,672.6,159.4,672.6,159.4L676,158.1L676.8,154.7L677.4,152.1L679.9,150.5L679.5,140.5L677.9,138.2L676.6,137.4L675.8,135.3L676.6,134.5L678.2,134.8L678.4,133.2L676,131L674.7,128.4L672.1,128.4L667.6,126.9L662.1,123.5L659.3,123.5L658.7,124.2L657.7,123.7L654.6,121.4L651.7,123.2L648.8,125.5L649.2,129L650.1,129.3L652.2,129.8L652.7,130.6L650.1,131.4L647.5,131.8L646.1,133.5L645.8,135.6L646.1,137.3L646.4,142.8L642.8,144.9L642.2,144.7L642.2,140.5L643.5,138.1L644.1,135.6L643.3,134.8L641.4,135.6L640.4,139.8L637.7,141L635.9,142.9L635.7,143.9L636.4,144.7L635.7,147.3L633.5,147.8L633.5,148.9L634.3,151.3L633.1,157.5L631.5,161.5L632.2,166.2L632.7,167.3L631.9,169.8L631.5,170.6L631.2,173.3L634.8,179.3L637.7,185.8L639.1,190.6L638.3,195.3L637.3,201.3L634.9,206.4L634.6,209.2L631.3,212.3L635.8,212.1L657.2,209.9L664.4,208.9L664.5,210.5L671.4,209.3L681.7,207.8L685.5,207.4L685.7,206.8L685.8,205.3L687.9,201.6L689.9,199.9L689.7,194.8L691.3,193.2L692.4,192.9L692.6,189.3L694.2,186.3L695.2,186.9L695.4,187.5L696.2,187.7L698.1,186.7L697.8,177.2Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="MI"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M844.48416,154.05791L844.80086,148.71228L841.9101499999999,137.92811L841.2635099999999,137.60479L838.3536099999999,136.3115L839.1619099999999,133.40161L838.3536099999999,131.30002000000002L835.6535599999999,126.66004000000002L836.6235299999998,122.78018000000003L835.8152199999998,117.60703000000004L833.3903099999999,111.14059000000003L832.5847399999999,106.21808000000003L859.0040999999999,99.48626000000003L859.3127999999999,105.00847000000003L861.2290599999999,107.75070000000004L861.2290599999999,111.79222000000004L857.5219099999999,116.85021000000005L854.9353399999999,117.99288000000004L854.9243399999999,119.11345000000004L856.2343099999999,120.63257000000004L855.92338,128.73054000000005L855.31395,137.98940000000005L855.086,143.54634000000004L856.05596,144.83963000000006L855.8943,149.41032000000007L855.4093200000001,151.10021000000006L856.4235000000001,151.82737000000006L848.9859500000001,153.33408000000006L844.4842100000001,154.05791000000005Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="VT"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M922.83976,78.830719L924.77969,80.932305L927.0429399999999,84.650496L927.0429399999999,86.590422L924.9413499999999,91.278575L923.0014199999999,91.925217L919.60655,94.99676600000001L914.7567399999999,100.49322000000001C914.7567399999999,100.49322000000001,914.1100999999999,100.49322000000001,913.4634599999999,100.49322000000001C912.8168199999999,100.49322000000001,912.49349,98.391636,912.49349,98.391636L910.7152299999999,98.553296L909.7452699999999,100.00824L907.3203599999999,101.46319L906.3503999999999,102.91812999999999L907.9669999999999,104.37306999999998L907.4820199999999,105.01971999999998L906.99704,107.76793999999998L905.05711,107.60627999999998L905.05711,105.98967999999998L904.73379,104.69638999999998L903.27885,105.01971999999998L901.50058,101.78650999999998L899.399,103.07978999999997L900.69228,104.53472999999997L901.0156,105.66635999999997L900.2072999999999,106.95963999999996L900.5306199999999,110.03118999999997L900.6922799999999,111.64778999999997L899.0756799999999,114.23435999999997L896.1657899999999,114.71933999999996L895.8424699999999,117.62922999999996L890.50767,120.70077999999997L889.21439,121.18575999999996L887.59778,119.73081999999997L884.5262299999999,123.28734999999996L885.4961999999999,126.52055999999996L884.0412499999999,127.81383999999996L883.8795899999999,132.17866999999995L882.7563099999999,138.43802999999994L880.2940599999998,137.28207999999995L879.8090699999998,134.21051999999995L875.9292199999998,133.07888999999994L875.6058999999998,130.33064999999993L868.3311499999998,106.88982999999993L863.6325699999998,92.25008799999993L865.0531099999997,92.13192299999993L866.5668999999997,92.54182199999993L866.5668999999997,89.95525399999993L867.8751999999997,85.45879799999993L870.4617699999998,80.77064499999993L871.9167199999998,76.72913299999993L869.9767899999998,74.30422599999993L869.9767899999998,68.32278899999993L870.7850899999999,67.35282599999992L871.5933999999999,64.60459799999992L871.4317399999999,63.14965399999993L871.2700699999999,58.299839999999925L873.0483399999999,53.45002599999992L875.95823,44.558699999999924L878.05981,40.35552799999992L879.3530999999999,40.35552799999992L880.6463799999999,40.51718799999992L880.6463799999999,41.64881099999992L881.9396699999999,43.91205799999992L884.6878899999998,44.55869999999992L885.4961999999998,43.750396999999914L885.4961999999998,42.78043499999991L889.5377099999998,39.87054599999991L891.3159699999999,38.092280999999915L892.7709199999999,38.25394199999992L898.75235,40.678848999999914L900.69228,41.64881099999992L909.74527,71.55599799999992L915.7267,71.55599799999992L916.53501,73.49592399999992L916.69667,78.34573799999991L919.6065500000001,80.60898399999991L920.4148600000001,80.60898399999991L920.5765200000001,80.1240029999999L920.0915400000001,78.9923799999999L922.8397600000001,78.8307189999999ZM901.90801,108.97825L903.44379,107.44247L904.81791,108.49327L905.38372,110.91819L903.68628,111.80731999999999L901.90801,108.97824999999999ZM908.61694,103.07763L910.39521,104.93673C910.39521,104.93673,911.6885,105.01753,911.6885,104.69422999999999C911.6885,104.37091,911.93099,102.67347,911.93099,102.67347L912.82013,101.86516999999999L912.01182,100.08689L909.99106,100.81437L908.61694,103.07763Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="ME"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M874.07001,178.89536L870.37422,163.93937L876.6435,162.09423L878.8346300000001,164.02135L882.1411200000001,168.342L884.8290200000001,172.74409L881.8296800000002,174.36888L880.5364000000002,174.20721999999998L879.4047800000002,175.98548999999997L876.9798700000002,177.92540999999997L874.0700100000003,178.89535999999998Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="RI"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M830.37944,188.7456L829.2478100000001,187.77564L826.66123,187.61398L824.39799,185.67406L822.76738,179.54493L819.3089200000001,179.63542999999999L816.86521,176.92722999999998L797.4798900000001,181.30917L754.47811,190.03886L746.9484600000001,191.26685L746.2103000000001,184.79851L747.6384,183.67313L748.93168,182.54151L749.90165,180.92489999999998L751.6799100000001,179.79327999999998L753.6198400000001,178.01501L754.10482,176.39840999999998L756.2064,173.65017999999998L757.33803,172.68022L757.17637,171.71025L755.8830800000001,168.63871L754.10482,168.47705L752.16489,162.33395L755.07478,160.55568L759.43961,159.10074L763.48113,157.80745L766.71434,157.32246999999998L773.01909,157.16080999999997L774.95902,158.45409999999998L776.57562,158.61576L778.67721,157.32246999999998L781.26378,156.19084999999998L786.43691,155.70586999999998L788.5385,153.92759999999998L790.31676,150.69438999999997L791.9333700000001,148.75446999999997L794.0349500000001,148.75446999999997L795.9748800000001,147.62283999999997L796.1365400000001,145.35959999999997L794.6816000000001,143.25800999999998L794.3582800000001,141.80307L795.4899000000001,139.70148L795.4899000000001,138.24654L793.7116300000001,138.24654L791.9333700000001,137.43824L791.12507,136.30661L790.9634100000001,133.72004L796.78318,128.22359L797.4298200000001,127.41529L798.8847700000001,124.5054L801.7946600000001,119.9789L804.5428900000002,116.26070999999999L806.6444700000002,113.83581L809.0595700000002,112.0102L812.1409300000003,110.76426L817.6373800000002,109.47097L820.8705900000002,109.63262999999999L825.3970900000003,108.17769L832.9622800000003,106.10652L833.4820700000002,111.08619L835.9069900000003,117.55263000000001L836.7152900000003,122.72578000000001L835.7453300000003,126.60564000000001L838.3319000000004,131.13214000000002L839.1402000000004,133.23373L838.3319000000004,136.14363L841.2418000000004,137.43691L841.8884400000004,137.76023L844.9600000000004,148.75317L844.4237100000004,153.81284000000002L843.9387300000004,164.64411L844.7470300000004,170.14058L845.5553300000005,173.69712L847.0102800000005,180.97186000000002L847.0102800000005,189.05490000000003L845.8786500000006,191.31815000000003L847.7179800000006,193.31094000000004L848.5145300000006,194.98936000000003L846.5746100000006,196.76763000000003L846.8979300000005,198.06091000000004L848.1912100000005,197.73759000000004L849.6461600000006,196.44431000000003L851.9094000000006,193.85774000000004L853.0410300000005,193.21110000000004L854.6576300000005,193.85774000000004L856.9208800000005,194.01940000000005L864.8422400000005,190.13955000000004L867.7521300000005,187.39132000000004L869.0454100000005,185.93638000000004L873.2485800000005,187.55298000000005L869.8537100000005,191.10951000000006L865.9738600000005,194.01940000000005L858.8608000000005,199.35419000000005L856.2742400000005,200.32416000000003L850.4544600000005,202.26408000000004L846.4129500000005,203.39571000000004L845.2382100000004,202.86278000000004L844.9941900000005,199.17425000000003L845.4791700000004,196.42601000000002L845.3175100000004,194.32443L842.5040000000005,192.62543L837.9775000000004,191.65546L834.0976400000004,190.52384L830.3794400000004,188.74556Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="NY"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M825.1237,224.69205L826.4321199999999,224.42105L828.7616499999999,223.1678L829.9735299999999,220.68473L831.5901399999999,218.42148L834.8233499999999,215.34992L834.8233499999999,214.54162L832.3984399999999,212.92502L828.8418999999999,210.50009999999997L827.8719399999999,207.91352999999998L825.1236999999999,207.59020999999998L824.9620399999999,206.45857999999998L824.1537399999999,203.71034999999998L826.4169999999998,202.57872999999998L826.5786599999998,200.15380999999996L825.2853599999997,198.86051999999995L825.4470199999997,197.24390999999994L827.3869599999997,194.17235999999994L827.3869599999997,191.10079999999994L830.0845899999997,188.45491999999993L829.1643099999997,187.77993999999993L826.6402299999996,187.5870299999999L824.3457399999996,185.6471099999999L822.7958199999996,179.5310499999999L819.2912399999996,179.6315699999999L816.8360099999995,176.9282399999999L798.7450199999995,181.1260099999999L755.7432399999996,189.8556999999999L746.8518899999996,191.3106399999999L746.2312199999996,184.7892499999999L740.8686899999996,189.85689999999988L739.5753999999996,190.3418799999999L735.3731099999997,193.3507699999999L738.2838699999996,212.4882199999999L740.7655299999997,222.21757999999988L744.3373299999997,241.4790699999999L747.6066399999997,240.8413899999999L759.5502199999997,239.33891999999992L797.4768499999998,231.67371999999992L812.3530599999998,228.85039999999992L820.6534099999998,227.22803999999994L820.9205199999998,226.98950999999994L823.0221199999997,225.37288999999993L825.1236999999998,224.69204999999994Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="PA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M829.67942,188.46016L827.3568700000001,191.19443L827.3568700000001,194.26599000000002L825.4169300000001,197.33754000000002L825.2552700000001,198.95416000000003L826.5485700000002,200.24744000000004L826.3869100000002,202.67236000000003L824.1236500000002,203.80398000000002L824.9319500000003,206.55221000000003L825.0936100000002,207.68384000000003L827.8418500000002,208.00716000000003L828.8118100000003,210.59373000000002L832.3683500000003,213.01865000000004L834.7932600000003,214.63525000000004L834.7932600000003,215.44356000000005L831.8100500000003,218.14012000000005L830.1934400000002,220.40336000000005L828.7384900000002,223.15160000000006L826.4752400000002,224.44488000000007L826.0127900000002,226.04736000000008L825.7702900000003,227.25982000000008L825.1610600000002,229.86656000000008L826.2533300000002,232.11075000000008L829.4865400000002,235.02064000000007L834.3363500000003,237.28389000000007L838.3778600000003,237.93053000000006L838.5395200000003,239.38547000000005L837.7312200000002,240.35543000000004L838.0545400000002,243.10366000000005L838.8628400000002,243.10366000000005L840.9644300000002,240.67876000000004L841.7727300000003,235.82894000000005L844.5209600000003,231.78743000000006L847.5925100000003,225.32101000000006L848.7241300000003,219.82456000000005L848.0774900000002,218.69293000000005L847.9158300000003,209.31662000000006L846.2992200000002,205.92176000000006L845.1676000000002,206.73006000000007L842.4193700000002,207.05338000000006L841.9343900000002,206.56840000000005L843.0660200000002,205.59843000000006L845.1676000000002,203.65851000000006L845.2307000000002,202.56468000000007L844.8463100000001,199.13084000000006L845.4196800000001,196.38260000000005L845.3022100000001,194.41359000000006L842.49467,192.66324000000006L837.4025300000001,191.48748000000006L833.2650900000001,190.10585000000006L829.6794600000001,188.46016000000006Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="NJ"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M825.6261,228.2791L825.9944099999999,226.13221L826.36948,224.44116L824.7464799999999,224.83892L823.1310199999999,225.30648L820.9247599999999,227.07077999999998L822.6448799999998,232.11365999999998L824.9081399999998,237.77177999999998L827.0097199999998,247.47142999999997L828.6263399999998,253.77620999999996L833.6378199999998,253.61454999999995L839.7799399999998,252.43386999999996L837.5157099999998,245.04759999999996L836.5457399999998,245.53257999999997L832.9892099999998,243.10767999999996L831.2109499999998,238.41951999999995L829.2710199999998,234.86298999999994L826.1238999999998,231.99267999999995L825.2597399999999,229.89455999999996L825.6260999999998,228.27909999999994Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="DE"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M839.79175,252.41476L833.7832,253.61860000000001L828.6402999999999,253.73606L826.7967399999999,246.81373000000002L824.8719299999999,237.64441000000002L822.2993099999999,231.45596000000003L821.0109299999999,227.05763000000005L813.5049099999999,228.67999000000003L798.6286999999999,231.50331000000003L761.1772699999999,239.05421000000004L762.3085699999999,244.06587000000005L763.2785299999999,249.72398000000004L763.6018499999999,249.40066000000004L765.7034499999999,246.97576000000004L767.9666899999999,244.35810000000004L770.3915999999998,243.74254000000005L771.8465599999998,242.28759000000005L773.6248199999999,239.70102000000006L774.9180999999999,240.34767000000005L777.8279899999999,240.02434000000005L780.4145699999999,237.92276000000004L782.4214599999999,236.46949000000004L784.2666899999999,235.98451000000003L785.91104,237.11446000000004L788.82093,238.56940000000003L790.76085,240.34767000000002L791.97331,241.88345L796.09566,243.58088L796.09566,246.49077L801.5921199999999,247.78406L802.7365599999999,248.32604L804.1484599999999,246.29772L807.0304299999999,248.26788L805.7522599999999,250.74981L804.9869899999999,254.73547L803.2087299999998,257.32204L803.2087299999998,259.42363L803.8553699999999,261.2019L808.9193199999999,262.55759L813.2304199999999,262.49589000000003L816.3019599999999,263.46586L818.4035499999999,263.78918000000004L819.3735099999999,261.68759000000006L817.9185699999999,259.58601000000004L817.9185699999999,257.80774L815.49366,255.70615000000004L813.39208,250.20970000000003L814.68536,244.87490000000003L814.5237,242.77332L813.23042,241.48003C813.23042,241.48003,814.68536,239.86343,814.68536,239.21679C814.68536,238.57014,815.1703399999999,237.11520000000002,815.1703399999999,237.11520000000002L817.1102699999999,235.82192L819.0501899999999,234.20531L819.5351699999999,235.17528L818.0802299999999,236.79188L816.7869499999999,240.51006999999998L817.1102699999999,241.64168999999998L818.88853,241.96500999999998L819.3735099999999,247.46147L817.2719299999999,248.43142999999998L817.5952499999999,251.98796L818.0802299999998,251.82629999999997L819.2118499999998,249.88637999999997L820.8284599999998,251.66463999999996L819.2118499999998,252.95792999999998L818.8885299999998,256.3528L821.4750999999999,259.74767L825.3549499999999,260.23265000000004L826.97156,259.42435000000006L830.2081099999999,263.60728000000006L831.5664599999999,264.14358000000004L838.2201299999999,261.34663000000006L840.2277099999999,257.3227600000001L839.7917499999999,252.41478000000006ZM823.82217,261.44348L824.95379,263.94923L825.11545,265.7275L826.24708,267.58660000000003C826.24708,267.58660000000003,827.13622,266.69746000000004,827.13622,266.37414C827.13622,266.05082,826.4087499999999,263.30258000000003,826.4087499999999,263.30258000000003L825.6812699999999,260.95849000000004L823.8221699999999,261.44348Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="MD"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M831.63885,266.06892L831.49494,264.12189L837.9483700000001,261.57201000000003L837.1779600000001,264.78985000000006L834.2580100000001,268.56896000000006L833.8399200000001,273.1547800000001L834.3016700000002,276.5452200000001L832.4737000000001,281.5233800000001L830.3094300000001,283.4395200000001L828.8390900000002,278.7987100000001L829.2849800000001,273.34960000000007L830.8719800000001,269.1665300000001L831.6388500000002,266.0689200000001ZM834.97904,294.37028L776.8048600000001,306.94570999999996L739.3778900000001,312.22477999999995L732.6995600000001,311.84959999999995L730.1143100000002,313.77597999999995L722.7751800000002,313.99666999999994L714.3930700000002,314.9743399999999L703.4781100000002,316.58895999999993L713.9475400000002,310.97775999999993L713.9344400000002,308.90282999999994L715.4544900000002,306.7566999999999L726.0082700000002,295.2552699999999L729.9549900000002,299.7327299999999L733.7380000000002,300.6967099999999L736.2814600000002,299.5563899999999L738.5186800000001,298.24522999999994L741.0552900000001,299.58874999999995L744.9694600000001,298.16098999999997L746.8461900000001,293.60465L749.4471100000001,294.14467L752.30235,292.01342L754.10162,292.50702L756.9288300000001,288.83045L757.2770800000001,286.74734L756.3134200000001,285.47177L757.3161900000001,283.60514L762.5904600000001,271.32799L763.2072300000001,265.59291L764.4361200000001,265.06937L766.6146500000001,267.51224L770.5505100000001,267.21107L772.4797200000002,259.63744L775.2737100000002,259.07658000000004L776.3234600000002,256.33551000000006L778.9032800000002,253.98863000000006L781.6751100000002,248.29344000000006L781.7600100000002,243.22589000000005L791.5815200000002,247.04871000000006C792.2623700000001,247.38913000000005,792.4144000000002,241.99956000000006,792.4144000000002,241.99956000000006L796.0669600000002,243.59789000000006L796.1352600000002,246.53605000000007L801.9195100000003,247.83554000000007L804.0524600000003,249.01174000000006L805.7123800000004,251.06743000000006L805.0578300000004,254.71610000000007L803.1103900000004,257.30708000000004L803.2202400000004,259.36615000000006L803.8092000000005,261.21906000000007L808.7879500000005,262.4874900000001L813.2392200000005,262.5273900000001L816.3080500000005,263.4860300000001L818.2515600000005,263.7953300000001L818.9663700000006,266.8837900000001L822.1568100000005,267.2863200000001L823.0248800000005,268.4863400000001L822.5853900000005,273.1764200000001L823.9601200000005,274.27897000000013L823.4811700000005,276.2093600000001L824.7105800000005,276.9991300000001L824.4887800000005,278.38373000000007L821.7947900000005,278.2888300000001L821.8837900000005,279.9043500000001L824.1647800000005,281.4472200000001L824.2863200000005,282.8591200000001L826.0594300000005,284.64450000000005L826.5512200000005,287.16863000000006L823.9981800000005,288.54994000000005L825.5704000000005,290.04424000000006L831.3714200000005,288.35841000000005L834.9790400000005,294.37034000000006Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="VA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M761.18551,238.96731L762.2975200000001,243.91183999999998L763.3809600000001,249.94316999999998L765.51125,247.36282999999997L767.77449,244.29126999999997L770.31287,243.67571999999996L771.76782,242.22077999999996L773.54609,239.63420999999997L774.99107,240.28084999999996L777.90096,239.95752999999996L780.4875400000001,237.85593999999998L782.4944300000001,236.40267999999998L784.3396600000001,235.91768999999996L785.64358,236.93415999999996L789.28683,238.75578999999996L791.22676,240.53405999999995L792.60088,241.82733999999996L791.83916,247.38227999999995L786.00425,244.84105999999994L781.7589999999999,243.21903999999995L781.6578599999999,248.39746999999994L778.9102199999999,253.93419999999995L776.3801899999999,256.36085999999995L775.1880999999998,259.11024999999995L772.5445199999998,259.6103499999999L771.6466799999998,263.2122299999999L770.6034499999998,267.16189999999995L766.6352099999998,267.50263999999993L764.3114799999998,265.06375999999995L763.2403299999999,265.62316999999996L762.6076499999998,271.09286999999995L761.2573599999998,274.6273699999999L756.2989599999999,285.58233999999993L757.1956499999999,286.74303999999995L756.9897899999999,288.65157999999997L754.1810999999999,292.53605L752.3725999999999,291.99176L749.40455,294.1515L746.86217,293.57929L744.86294,298.13486C744.86294,298.13486,741.60363,299.56508,740.94003,299.50258C740.7795199999999,299.48748,738.47093,298.25348,738.47093,298.25348L736.13441,299.63285L733.72461,300.67725L729.97992,299.78813L728.85852,298.61985000000004L726.6663,295.59649L723.5237099999999,293.60837000000004L721.8121399999999,289.98513L717.5272599999998,286.51694000000003L716.8806099999998,284.25369L714.2940399999998,282.79874L713.4857299999998,281.18214L713.2432399999998,275.92816L715.4256599999998,275.84736L717.3655999999997,275.03906L717.5272599999997,272.29083L719.1438599999997,270.83588000000003L719.3055199999997,265.8244L720.2754799999997,261.94454L721.5687699999996,261.2979L722.8620499999996,262.42952L723.3470399999997,264.20779000000005L725.1253099999997,263.23782000000006L725.6102899999996,261.62122000000005L724.4786699999996,259.84295000000003L724.4786699999996,257.41804L725.4486299999996,256.12475L727.7118799999996,252.72988L729.0051599999996,251.27494000000002L731.1067599999996,251.75992000000002L733.3699999999995,250.1433L736.4415499999996,246.74843L738.7048099999995,242.86857L739.0281299999995,237.21046L739.5131099999994,232.19897L739.5131099999994,227.51081L738.3814899999994,224.43926L739.3514499999994,222.9843L740.6349299999995,221.69101999999998L744.1261799999995,241.51814L748.7571899999995,240.76699L761.1855099999995,238.96733999999998Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="WV"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M735.32497,193.32832L729.23143,197.38166999999999L725.35158,199.64491999999998L721.95671,203.36310999999998L717.9152,207.24295999999998L714.68199,208.05125999999998L711.7721,208.53624L706.2756400000001,211.12281L704.17406,211.28447L700.7791900000001,208.21292L695.6060500000001,208.85957L693.0194900000001,207.40462L690.6384200000001,206.05379L685.7458500000001,206.75719999999998L675.5612300000001,208.37381L664.3543600000002,210.55854L665.6476500000001,225.18882L667.4259200000001,238.92999L670.0124800000001,262.37079L670.5783000000001,267.20196L674.7006500000001,267.07293999999996L677.1255600000001,266.26462999999995L680.48936,267.7677699999999L682.55985,272.1325999999999L687.69879,272.1154999999999L689.5905300000001,274.2341999999999L691.3517,274.1688999999999L693.8900900000001,272.8274399999999L696.3942600000001,273.19893999999994L701.8155400000002,273.68161999999995L703.5425100000002,271.54893999999996L705.8881600000002,270.25566L707.9586500000001,269.57480999999996L708.6052900000002,272.32304999999997L710.3835700000002,273.29301L713.8592600000002,275.63707999999997L716.0416800000002,275.55627999999996L717.3748000000002,275.06379999999996L717.5595100000002,272.30226999999996L719.1448700000002,270.84730999999994L719.2440700000002,266.05458999999996C719.2440700000002,266.05458999999996,720.2680300000002,261.94552999999996,720.2680300000002,261.94552999999996L721.5673000000002,261.34425L722.8886500000002,262.49199L723.4268000000002,264.18901L725.1459300000001,263.15159L725.5849100000001,261.69084L724.4682200000002,259.78778L724.5345200000002,257.47335L725.2835200000002,256.40103999999997L727.4362800000001,253.09455999999997L728.4865000000001,251.55121999999997L730.5880900000001,252.03619999999998L732.85134,250.41958999999997L735.92289,247.02471999999997L738.69438,242.94598999999997L739.01471,237.89047999999997L739.49969,232.87898999999996L739.32291,227.57210999999995L738.36807,224.67732999999996L738.71931,223.48754999999994L740.5237,221.73743999999994L738.23491,212.69010999999995L735.32502,193.32833999999994Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="OH"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M619.56954,299.97132L619.6348399999999,297.11274L620.11983,292.58623L622.38307,289.67635L624.16135,285.79648000000003L626.7479099999999,281.59331000000003L626.26293,275.77352L624.4846699999999,273.02529000000004L624.16135,269.79208000000006L624.96965,264.29561000000007L624.48467,257.34420000000006L623.19137,241.33979000000005L621.89809,225.98203000000004L620.92762,214.26201000000003L623.99868,215.15152000000003L625.4536300000001,216.12148000000002L626.5852500000001,215.79816000000002L628.6868400000001,213.85824000000002L631.5164100000001,212.24125000000004L636.6092100000001,212.07921000000005L658.59508,209.81595000000004L664.1708100000001,209.28279000000003L665.6739500000001,225.23900000000003L669.9253000000001,262.08055L670.5237600000002,267.85215L670.1522600000002,270.1154L671.3802400000002,271.91077L671.4766400000002,273.28332L668.9553500000002,274.88283L665.4159200000001,276.43414L662.2137900000001,276.98442L661.6153300000001,281.85135L657.04064,285.16382000000004L654.24422,289.17426000000006L654.56754,291.55099000000007L653.9862,293.08519000000007L650.6597300000001,293.08519000000007L649.0742000000001,291.46859000000006L646.5808900000002,292.73079000000007L643.8979300000002,294.23393000000004L644.0596000000002,297.28838L642.8658100000001,297.54641000000004L642.3979300000001,296.52827L640.2310500000001,295.02513000000005L636.9807300000001,296.36661000000004L635.4294200000002,299.37286000000006L633.9915800000001,298.5645600000001L632.5366300000001,296.9650500000001L628.0722900000001,297.45004000000006L622.47946,298.4200000000001L619.56957,299.97132000000005Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="IN"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M619.54145,300.34244L619.5726500000001,297.11273L620.1400400000001,292.46677L622.4725700000001,289.55091L624.3392200000002,285.47515L626.5722400000002,281.47981999999996L626.2007400000002,276.22741999999994L624.1955300000002,272.6848499999999L624.0991300000002,269.33816999999993L624.7939600000002,264.0686599999999L623.9685500000002,256.89028999999994L622.9022100000002,241.11283999999995L621.6089300000002,226.09549999999996L620.6866500000002,214.45629999999997L620.4141400000002,213.53490999999997L619.6058400000002,210.94833999999997L618.3125600000002,207.23014999999998L616.6959500000002,205.45188L615.2410100000002,202.86532L615.0074400000002,197.37636L569.2110100000002,199.97461L569.4396300000002,202.34656L571.7258600000002,203.03243L572.6403400000003,204.17554L573.0975900000003,206.00452L576.9841700000003,209.43386L577.6700500000003,211.72009L576.9841700000003,215.14943L575.1551900000003,218.80739L574.4693300000002,221.32223L572.1831000000002,223.15122L570.3541200000002,223.83709L565.0958000000002,225.20882L564.4099300000001,227.0378L563.7240600000001,229.09541000000002L564.4099300000001,230.46715L566.2389100000001,232.06751L566.0102900000002,236.18271L564.1813000000002,237.78306999999998L563.4954400000001,239.38342999999998L563.4954400000001,242.12689999999998L561.6664600000001,242.58414L560.0661000000001,243.72726L559.8374800000001,245.099L560.0661000000001,247.1566L558.3514300000002,248.47117L557.3226300000001,251.27181L557.7798700000001,254.92976L560.0661000000001,262.24568999999997L567.3820300000001,269.79024L572.8689600000001,273.4482L572.6403400000002,277.79203L573.5548400000001,279.16377L579.9562700000001,279.62101L582.6997400000001,280.99275L582.0138800000001,284.65071L579.72765,290.5949L579.04178,293.79562L581.328,297.68219999999997L587.72944,302.94052L592.3018999999999,303.62639L594.3594899999999,308.65609L596.4170999999999,311.8568L595.5026099999999,314.82889L597.1029699999999,318.9441L598.9319499999999,321.00171L600.3459799999999,320.12102L601.2536399999999,318.04623L603.4667199999999,316.29902999999996L605.5981899999999,315.68462999999997L608.2007199999999,316.86442999999997L611.8277099999999,318.24012999999997L613.0166599999999,317.9419L613.2165299999999,315.68345L611.92923,313.27166L612.23345,310.89494L614.0718499999999,309.54749000000004L617.09439,308.73720000000003L618.35529,308.27868L617.74268,306.8918L616.9513099999999,304.53743L618.3839099999999,303.55647L619.5413799999999,300.34244Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="IL"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M874.06831,178.86288L870.39088,163.98407L865.67206,164.90438L844.44328,169.64747L845.4434699999999,172.87314L846.89842,180.14788000000001L847.0752,189.1148L845.85518,191.28967L847.77597,193.22201L852.0475,189.31637L855.60403,186.08316L857.54395,183.98157L858.35226,184.62821L861.10048,183.17327L866.2736199999999,182.04165L874.0683099999999,178.86288000000002Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="CT"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M615.06589,197.36866L614.99919,194.21124L613.82008,189.68474L613.1734399999999,183.54165L612.0418199999999,181.11674L613.0117799999999,178.04519L613.82008,175.1353L615.27503,172.54874L614.62838,169.15387L613.98174,165.59734L614.4667199999999,163.81907L616.4066499999999,161.39416L616.5683099999999,158.64593L615.7600099999999,157.35264999999998L616.4066499999999,154.76608L615.9541299999999,150.59537L618.7023599999999,144.93726L621.6122499999999,138.14752000000001L621.7739099999999,135.88427000000001L621.4505899999999,134.91431000000003L620.6422799999999,135.39929000000004L616.4391099999999,141.70405000000002L613.6908799999999,145.74556L611.7509599999998,147.52383L610.9426599999998,149.78707L608.9877099999998,150.59537L607.8560899999998,152.5353L606.4011399999997,152.21198L606.2394799999997,150.43371000000002L607.5327699999997,148.00881L609.6343499999997,143.32065L611.4126199999997,141.70405L612.4034499999997,139.34619999999998L609.8429999999997,137.44485999999998L607.8681799999997,127.07786999999998L604.3207099999997,125.73588999999997L602.3744499999997,123.42755999999997L590.2447399999996,120.70591999999998L587.3688499999996,119.69386999999998L579.1557299999996,117.52657999999998L571.2378099999996,116.36782999999998L567.4726499999996,111.23715999999999L566.7222499999996,111.79117L565.5243399999996,111.62951L564.8776899999996,110.49789L563.5436799999995,110.79444L562.4120499999996,110.95609999999999L560.6337899999995,111.92605999999999L559.6638199999995,111.27941999999999L560.3104699999996,109.33948999999998L562.2503899999996,106.26793999999998L563.3820099999996,105.13631999999998L561.4420899999996,103.68137999999999L559.3404999999996,104.48967999999999L556.4306099999995,106.4296L548.9942299999996,109.66281L546.0843399999995,110.30945L543.1744599999995,109.82447L542.1927299999995,108.94622000000001L540.0760299999995,111.7814L539.8474099999995,114.52487L539.8474099999995,122.9839L538.7042899999996,124.58427L533.4459699999995,128.47084L531.1597499999996,134.41503L531.6169899999995,134.64365L534.1318399999996,136.70126000000002L534.8176999999996,139.90198L532.9887199999996,143.10269L532.9887199999996,146.98928L533.4459699999996,153.61933000000002L536.4180599999996,156.59143000000003L539.8474099999996,156.59143000000003L541.6763899999996,159.79215000000002L545.1057199999997,160.24939000000003L548.9923099999996,165.96496000000002L556.0796099999997,170.08017L558.1372099999996,172.82364L559.0517099999996,180.25388L559.7375699999997,183.5689L562.0237999999997,185.16926L562.2524199999997,186.541L560.1948199999997,189.97033L560.4234399999997,193.17105999999998L562.9382899999997,197.05764L565.4531399999997,198.20075L568.4252299999997,198.65799L569.7675699999998,200.03811000000002L615.0659299999998,197.36866Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="WI"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M834.98153,294.31554L837.0665300000001,299.23289L840.62306,305.69931L843.04796,308.12422000000004L843.6946,310.38747000000006L841.2697000000001,310.54913000000005L842.0780000000001,311.19577000000004L841.7546800000001,315.39894000000004L839.1681100000001,316.69222L838.52147,318.79381L837.22819,321.7037L833.50999,323.32030000000003L831.08509,322.99698L829.63014,322.83532L828.01354,321.54204000000004L828.33686,322.83532L828.33686,323.80529L830.27679,323.80529L831.08509,325.09857L829.14516,331.40333L833.34833,331.40333L833.99498,333.01993L836.25822,330.75669L837.55151,330.2717L835.61158,333.82823L832.54003,338.67805000000004L831.24675,338.67805000000004L830.11512,338.19307000000003L827.3669000000001,338.83971L822.1937600000001,341.26462000000004L815.7273400000001,346.59941000000003L812.3324700000002,351.28756000000004L810.3925500000001,357.75398000000007L809.9075700000002,360.1788900000001L805.2194100000002,360.6638700000001L799.7662800000002,362.0005300000001L789.8198700000002,353.79800000000006L777.2103300000001,346.19995000000006L774.3004400000001,345.39164000000005L761.6909100000001,346.84659000000005L757.4144500000001,347.59674000000007L755.7978500000002,344.36352000000005L752.8274900000001,342.24682000000007L736.3381000000002,342.7318000000001L729.0633600000002,343.54010000000005L720.0103700000002,348.06661L713.8672600000002,350.65317000000005L692.6897100000002,353.2397500000001L693.1898000000002,349.1854200000001L694.9680700000002,347.73048000000006L697.7163100000002,347.08383000000003L698.3629500000003,343.36563L702.5661300000003,340.61741L706.4459800000003,339.16245L710.6491700000003,335.60591999999997L715.0140000000002,333.50433L715.6606400000003,330.43277L719.5405000000003,326.55292000000003L720.1871400000003,326.39126000000005C720.1871400000003,326.39126000000005,720.1871400000003,327.52289,720.9954500000003,327.52289C721.8037500000004,327.52289,722.9353800000004,327.84621000000004,722.9353800000004,327.84621000000004L725.1986300000003,324.28967000000006L727.3002200000003,323.64302000000004L729.5634600000003,323.96635000000003L731.1800800000003,320.40982L734.0899700000003,317.82324L734.5749500000003,315.72165L734.7624500000003,312.07346L739.0389500000003,312.05096000000003L746.2375400000003,311.19517L761.9947700000004,308.94274L777.1308100000003,306.85617L798.7712900000004,302.13682L818.7546100000004,297.87825L829.9315500000004,295.47244L834.9815300000004,294.31556ZM839.25199,327.52211L841.83857,325.01636L844.99095,322.42978L846.52673,321.78314L846.68839,319.76238L846.04175,313.61926L844.5867999999999,311.27518L843.9401499999999,309.41607999999997L844.6676299999999,309.17357999999996L847.4158699999999,314.67006L847.8200199999999,319.11573L847.6583599999999,322.51061999999996L844.26348,324.04639L841.43441,326.47130999999996L840.30279,327.68377L839.25199,327.52211Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="NC"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M805.81945,250.84384L803.9611699999999,249.01967L802.72854,248.33337999999998L804.1715499999999,246.31090999999998L807.0606399999999,248.25940999999997L805.81945,250.84383999999997Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="DC"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M899.62349,173.25394L901.79541,172.56806L902.25267,170.85339L903.28147,170.96769999999998L904.3102700000001,173.25393999999997L903.05285,173.71117999999998L899.16625,173.82549999999998L899.62349,173.25393999999997ZM890.2499499999999,174.05412L892.5361699999999,171.42495000000002L894.1365399999999,171.42495000000002L895.9655299999998,172.91100000000003L893.5649899999999,173.93980000000002L891.3930699999999,174.9686L890.2499499999999,174.05412ZM855.4508199999999,152.06593L873.09769,147.42525L875.3609499999999,146.77861000000001L877.2750299999999,143.9829L881.0117999999999,142.31959L883.9010399999999,146.73243L881.4761299999999,151.90556999999998L881.1528099999999,153.36050999999998L883.0927399999999,155.94707999999997L884.2243599999999,155.13877999999997L886.00263,155.13877999999997L888.26587,157.72533999999996L892.14573,163.70677999999995L895.7022599999999,164.19175999999996L897.9654999999999,163.22179999999997L899.7437699999999,161.44352999999998L898.9354599999999,158.69530999999998L896.8338799999999,157.07869999999997L895.3789299999999,157.88699999999997L894.4089699999998,156.59371999999996L894.8939499999998,156.10873999999995L896.9955399999998,155.94707999999994L898.7737999999998,156.75537999999995L900.7137299999998,159.18028999999996L901.6836899999998,162.09017999999995L902.0070099999998,164.51507999999995L897.8038399999998,165.97002999999995L893.9239899999998,167.90994999999995L890.0441399999997,172.43644999999995L888.1042099999997,173.89138999999994L888.1042099999997,172.92142999999996L890.5291199999997,171.46647999999996L891.0140999999996,169.68821999999997L890.2057999999996,166.61666999999997L887.2959099999996,168.07160999999996L886.4876099999996,169.52655999999996L886.9725899999995,171.78979999999996L884.9062599999995,172.79022999999995L882.1590599999995,168.26309999999995L878.7641799999996,163.89825999999996L876.6936799999995,162.08578999999997L870.1604099999995,163.96199L865.0680799999996,165.01278L844.3929199999995,169.60499L843.7251599999995,164.83713999999998L844.3717999999996,154.24836999999997L848.6610699999995,153.35922999999997L855.4508199999996,152.06592999999998Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="MA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M696.67788,318.25411L644.7847899999999,323.2656L629.02523,325.04386L624.4040299999999,325.55657L620.53568,325.52887000000004L620.31471,329.6297L612.12933,329.89371L605.17792,330.54035L597.08709,330.41649L595.67331,337.48935L593.97708,342.9694L590.68391,345.72024L589.33517,350.1013L589.01185,352.68787L584.97033,354.95110999999997L586.42527,358.50764999999996L585.4553099999999,362.87248999999997L584.4869299999999,363.66213999999997L692.6454799999999,353.25458999999995L693.0487499999999,349.29964999999993L694.85948,347.80925999999994L697.69363,347.0598099999999L698.36556,343.34282999999994L702.46416,340.6378699999999L706.51109,339.1438399999999L710.59467,335.5735099999999L715.03076,333.5480499999999L715.55202,330.4806999999999L719.61662,326.4957099999999L720.16742,326.3815399999999C720.16742,326.3815399999999,720.19862,327.5131599999999,721.00697,327.5131599999999C721.81527,327.5131599999999,722.9469,327.86772999999994,722.9469,327.86772999999994L725.21015,324.27993999999995L727.28049,323.63329999999996L729.5556,323.92850999999996L731.15391,320.39564999999993L734.10916,317.7517399999999L734.53084,315.8126299999999L734.8398,312.1014799999999L732.6932499999999,311.9017099999999L730.0915699999999,313.9300399999999L723.09826,313.95913999999993L704.73897,316.34595999999993L696.67788,318.25415999999996Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="TN"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M593.82477,343.05296L589.84489,343.76966L584.7327399999999,343.13563L585.1534399999999,341.53355999999997L588.1331899999999,338.96687L589.07657,335.31062L587.24759,332.33851999999996L508.83001999999993,334.85337L510.43037999999996,341.71206L510.43037,349.94248L511.80212,360.91647L512.03074,398.7534L514.3169700000001,400.69669L517.2890600000001,399.32496L520.03254,400.46806999999995L520.71288,407.04137L576.33414,405.90076999999997L577.47977,403.81039999999996L577.1931500000001,400.26088999999996L575.36752,397.28878999999995L576.96621,395.80357999999995L575.36752,393.29207999999994L576.05172,390.7822499999999L577.42011,385.1768199999999L579.9383,383.1141899999999L579.25243,380.8296299999999L582.9104,375.4578399999999L585.65387,374.08944999999994L585.54039,372.59586999999993L585.19495,370.7702299999999L588.0518999999999,365.1714999999999L590.45494,363.9149099999999L590.83907,360.4872799999999L592.60974,359.2455799999999L589.46622,358.7613099999999L588.12476,354.7508699999999L590.92884,352.3741599999999L591.4791,350.3549599999999L592.75858,346.3083499999999L593.8247700000001,343.0529599999999Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="AR"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M558.44022,248.11316L555.92035,245.02590999999998L554.77723,242.73968L490.42,245.14022L488.13374,245.25453L489.39117,247.76937999999998L489.16255,250.05559999999997L491.67739,253.94218999999998L494.76379000000003,258.0574L497.85020000000003,260.80087L500.01143,261.02948999999995L501.50816000000003,261.9439899999999L501.50816000000003,264.9160799999999L499.67919,266.51643999999993L499.22193,268.80265999999995L501.27954,272.23200999999995L503.7944,275.2040999999999L506.30924,277.0330799999999L507.68097,288.6928299999999L507.99511,324.7650399999999L508.22373,329.4517899999999L508.68097,334.8352999999999L531.11396,333.9684799999999L554.31999,333.28260999999986L575.12465,332.48159999999984L586.7793899999999,332.25129999999984L588.9487899999999,335.67729999999983L588.2646,338.98479999999984L585.1773499999999,341.3878399999998L584.6049599999999,343.2251799999998L589.98345,343.6824399999998L593.8784099999999,342.9965599999998L595.5955899999999,337.5029299999998L596.2470099999999,331.64613999999983L598.3450399999999,329.09097999999983L600.94107,327.6040899999998L600.9924699999999,324.55384999999984L602.0084899999999,322.6173699999998L600.31426,320.07359999999983L598.98333,321.05785999999983L596.99071,318.83061999999984L595.70568,314.0716199999998L596.50669,311.55341999999985L594.5625600000001,308.12575999999984L592.7319200000001,303.5499599999998L587.9325100000001,302.75061999999986L580.9637100000001,297.15186999999986L579.2448500000002,293.03833999999983L580.0442000000002,289.83761999999984L582.1034700000001,283.7799499999999L582.5623900000002,280.91631999999987L580.6132500000001,279.88500999999985L573.7579100000002,279.08733999999987L572.7299400000002,277.3751799999999L572.6181400000002,273.14481999999987L567.1312000000001,269.71380999999985L560.1556900000002,261.94230999999985L557.8694700000002,254.62637999999984L557.6391800000002,250.40105999999983L558.4401900000003,248.11315999999982Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="MO"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M672.29229,355.5518L672.29229,357.73422L672.45395,359.83582L673.10059,363.23069000000004L676.49547,371.15206000000006L678.9203799999999,381.01337000000007L680.3753199999999,387.15648000000004L681.9919299999999,392.00629000000004L683.44688,398.95770000000005L685.54847,405.26247000000006L688.13504,408.65735000000006L688.62002,412.0522200000001L690.55995,412.86052000000007L690.7216099999999,414.9621200000001L688.9433399999999,419.8119300000001L688.45836,423.0451500000001L688.2967,424.9850800000001L689.91331,429.3499200000001L690.23663,434.6847200000001L689.42832,437.1096300000001L690.07497,437.9179400000001L691.5299200000001,438.7262400000001L691.7346200000001,441.9443300000001L693.9676300000001,445.2938600000001L696.2180700000001,447.45591000000013L704.1394500000001,447.6175700000001L714.9592000000001,446.9709300000001L736.4715900000001,445.67765000000014L741.9173100000002,445.00328000000013L746.4945600000002,445.0309800000001L746.6562200000002,447.94087000000013L749.2427900000002,448.7491700000001L749.5661100000002,444.3843300000001L747.9495000000002,439.8578300000001L749.0811300000001,438.2412300000001L754.9009100000002,439.04953000000006L759.8783200000001,439.3673100000001L759.1029000000001,433.0685200000001L761.3661400000001,423.0455700000001L762.8210900000001,418.84239000000014L762.3361000000001,416.2558300000001L765.6705100000001,410.0115300000001L765.1602100000001,408.6598500000001L763.2468000000001,409.36443000000014L760.6602400000002,408.07113000000015L760.0135900000001,405.96954000000017L758.7203100000002,402.41301000000016L756.4570500000002,400.31142000000017L753.8704900000002,399.6647800000002L752.2538800000002,394.81496000000016L749.3288700000002,388.4799600000002L745.1257000000002,386.5400300000002L743.0241000000002,384.60010000000017L741.7308100000002,382.0135300000002L739.6292300000002,380.07360000000017L737.3659800000003,378.78031000000016L735.1027300000003,375.87042000000014L732.0311800000003,373.60718000000014L727.5046700000003,371.82890000000015L727.0196900000003,370.3739600000001L724.5947800000004,367.4640700000001L724.1098000000004,366.0091200000001L720.7149200000005,361.0386400000001L717.1950500000005,361.1378400000001L713.4401400000005,358.7817000000001L712.0218600000005,357.48842000000013L711.6985400000005,355.7101500000001L712.5693400000006,353.77023000000014L714.7959800000006,352.66009000000014L714.1620400000005,350.56287000000015L672.2922900000005,355.5518000000001Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="GA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M764.94328,408.16488L763.16622,409.13437999999996L760.5796499999999,407.84108999999995L759.9330099999999,405.73949999999996L758.6397299999999,402.18296999999995L756.3764699999999,400.08136999999994L753.7898999999999,399.43472999999994L752.1732999999999,394.58491999999995L749.4250599999999,388.60346999999996L745.2218899999999,386.66353L743.12029,384.72361L741.82701,382.13704L739.72542,380.19710000000003L737.46217,378.90382000000005L735.19892,375.99393000000003L732.12737,373.73069000000004L727.60086,371.95241000000004L727.1158800000001,370.49747L724.6909800000001,367.58758L724.20599,366.13262L720.8111100000001,360.95948999999996L717.4162400000001,361.12114999999994L713.3747200000001,358.69622999999996L712.0814400000002,357.40295L711.7581200000002,355.62467999999996L712.5664200000002,353.68476L714.8296700000002,352.71477999999996L714.3188500000002,350.42569999999995L720.0869500000002,348.08912999999995L729.2024500000002,343.50012999999996L736.9771800000002,342.69181999999995L753.0915800000002,342.26933999999994L755.7298300000002,344.14676999999995L757.4089300000002,347.50498999999996L761.7112800000002,346.89500999999996L774.3208100000002,345.4400499999999L777.2307000000002,346.24835999999993L789.8402400000002,353.8464199999999L799.9483200000002,361.96809999999994L794.5271500000002,367.42643999999996L791.9405800000002,373.56953999999996L791.4556000000002,379.87429999999995L789.8390000000003,380.6825999999999L788.7073700000003,383.4308299999999L786.2824700000003,384.0774699999999L784.1808800000003,387.6339999999999L781.4326500000003,390.3822299999999L779.1694100000003,393.7770999999999L777.5528000000003,394.5853999999999L773.9962700000003,397.9802699999999L771.0863800000003,398.1419299999999L772.0563500000003,401.3751399999999L767.0448700000003,406.8715999999999L764.9432800000003,408.16487999999987Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="SC"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M725.9944,295.2707L723.70108,297.67238L720.1228900000001,301.66641999999996L715.1983400000001,307.13109L713.9825700000001,308.84686L713.9200700000001,310.94844L709.5402100000001,313.11253L703.8820900000001,316.50741L696.6502200000001,318.30626L644.7823300000001,323.20512L629.0227700000002,324.98338L624.4015700000001,325.49609000000004L620.5332200000001,325.46839000000006L620.3062700000002,329.68867000000006L612.1268600000002,329.83323000000007L605.1754500000002,330.47987000000006L597.1879700000002,330.41967000000005L598.3957500000001,329.09959000000003L600.8952900000002,327.55874000000006L601.1239200000001,324.35801000000004L602.0384100000001,322.52903000000003L600.4315900000001,319.99013L601.2334200000001,318.08332L603.4966800000001,316.30506L605.5982600000001,315.65841L608.3464900000001,316.9517L611.9030300000002,318.24498L613.0346600000001,317.92166L613.1963200000001,315.65840999999995L611.9030300000002,313.23349999999994L612.2263500000001,310.9702499999999L614.1662800000001,309.5153099999999L616.7528600000002,308.86865999999986L618.3694600000001,308.2220199999999L617.5611600000001,306.44374999999985L616.91452,304.50381999999985L618.42114,303.5080199999999C618.4241400000001,303.47091999999986,619.6751,299.9857299999999,619.65943,299.8502099999999L622.71265,298.3715299999999L628.0324400000001,297.4015699999999L632.5264800000001,296.91658999999987L633.9189200000001,298.5440199999999L635.4471900000001,299.41481999999985L637.0379600000001,296.30660999999986L640.2250400000001,295.02398999999986L642.4301300000002,296.5080199999999L642.8406900000002,297.50705999999985L644.0142100000003,297.24304999999987L643.8525400000003,294.2901199999999L646.9834100000003,292.5409299999999L649.1315000000003,291.4674499999999L650.6608600000003,293.1282599999999L653.9790100000002,293.0840599999999L654.5663400000002,291.5128099999999L654.1988300000002,289.2495699999999L656.7993600000002,285.2510699999999L661.5759100000002,281.8131699999999L662.2818600000003,276.9773099999999L665.2068800000003,276.52139999999986L668.9983400000003,274.87571999999983L671.4416600000003,273.16747999999984L671.2433300000002,271.60254999999984L670.1008800000002,270.1476099999998L670.6667000000002,267.1526999999998L674.8515500000002,267.0351999999998L677.1514600000002,266.28939999999983L680.4988500000002,267.71849999999984L682.5529600000002,272.08333999999985L687.6852500000002,272.09413999999987L689.7362600000002,274.30232999999987L691.3517100000003,274.1546299999999L693.9534000000002,272.8764599999999L699.1904600000003,273.4498299999999L701.7653800000003,273.6673399999999L703.4529600000003,271.6110999999999L706.0709100000003,270.1852199999999L707.9526900000003,269.4781199999999L708.5993300000004,272.3147499999999L710.6427600000003,273.3730899999999L713.2855200000002,275.4555799999999L713.4029900000003,281.1288199999999L714.2112900000003,282.7012299999999L716.8010100000004,284.2575099999999L717.5726500000004,286.5520199999999L721.7325400000004,289.9889599999999L723.5378500000004,293.6121999999999L725.9944000000004,295.2707199999999Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="KY"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M631.30647,460.41572L629.81587,446.09422L627.06763,427.34158L627.22929,413.27709000000004L628.03759,382.23824L627.87593,365.58718L628.04102,359.16812L672.5255,355.54867L672.3777,357.73109L672.53936,359.83269L673.18601,363.22756000000004L676.58089,371.14893000000006L679.0057899999999,381.01024000000007L680.46074,387.15335000000005L682.0773399999999,392.00317000000007L683.5323,398.9545800000001L685.63388,405.25934000000007L688.22045,408.65423000000004L688.70543,412.04909000000004L690.64537,412.85740000000004L690.8070299999999,414.95899000000003L689.02875,419.80881000000005L688.54377,423.04203000000007L688.38211,424.98195000000004L689.99873,429.34680000000003L690.32205,434.68159L689.51373,437.10651L690.16039,437.91481L691.61533,438.72310999999996L691.9434699999999,441.61193L686.3458099999999,441.25838L679.5560599999999,441.90503L654.0136599999998,444.81491L643.6020999999998,446.22168L643.3807199999999,449.09908L645.1589899999999,450.87735000000004L647.74556,452.81727L648.32642,460.75271L642.78436,463.32561L640.03614,463.00228999999996L642.78436,461.06235999999996L642.78436,460.09239999999994L639.71282,454.1109599999999L637.44957,453.46431999999993L635.9946199999999,457.8291499999999L634.70134,460.5773799999999L634.0546999999999,460.4157199999999L631.3064699999999,460.4157199999999Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="AL"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M607.96706,459.16125L604.6824499999999,455.99511L605.6923599999999,450.49488L605.0310099999999,449.6018L595.7693399999999,450.60836L570.7410199999999,451.06728L570.05683,448.6726L570.96964,440.2169L574.28552,434.27105L579.31688,425.58003L578.74281,423.18201000000005L579.9993999999999,422.50116L580.4583299999999,420.54867L578.1720899999999,418.49274L578.0602999999999,416.55029L576.2296399999999,412.20478L576.0825899999999,405.86618000000004L520.6087999999999,406.79015000000004L520.6373999999998,416.36372000000006L521.3232699999999,425.7372500000001L522.0091399999999,429.62383000000005L524.5239899999999,433.73904000000005L525.4384799999999,438.76875000000007L529.7823099999999,444.25568000000004L530.0109299999999,447.45640000000003L530.6967999999999,448.14227000000005L530.0109299999999,456.60131000000007L527.0388399999999,461.6310000000001L528.6392,463.6886100000001L527.95332,466.2034500000001L527.2674599999999,473.51938000000007L525.8957199999999,476.7200900000001L526.0181799999999,480.33654000000007L530.7046599999999,478.81639000000007L542.8180099999998,479.0234000000001L553.1642799999998,482.5799300000001L559.6306999999998,483.7115600000001L563.3488899999999,482.2566100000001L566.5820999999999,483.38824000000005L569.8153099999998,484.35820000000007L570.6236099999999,482.2566100000001L567.3903999999999,481.1249900000001L564.8038299999998,481.6099700000001L562.0555999999998,479.9933700000001C562.0555999999998,479.9933700000001,562.2172699999998,478.70008000000007,562.8639099999998,478.5384200000001C563.5105499999999,478.3767600000001,565.9354599999998,477.5684600000001,565.9354599999998,477.5684600000001L567.7137199999999,479.0234000000001L569.4919899999999,478.0534400000001L572.7251999999999,478.70008000000007L574.1801399999998,481.1249900000001L574.5034599999998,483.3882400000001L579.0299499999998,483.71156000000013L580.8082199999998,485.4898200000001L579.9999199999997,487.1064300000001L578.7066299999998,487.9147300000001L580.3232399999998,489.5313300000001L588.7295799999998,493.0878600000001L592.2861099999998,491.7945800000001L593.2560799999998,489.3696700000001L595.8426399999997,488.7230300000001L597.6209099999998,487.2680900000001L598.9141899999997,488.2380500000001L599.7224899999998,491.1479400000001L597.4592499999998,491.9562400000001L598.1058899999998,492.6028800000001L601.5007599999998,491.3096000000001L603.7640099999998,487.9147300000001L604.5723099999998,487.42975000000007L602.4707199999998,487.10643000000005L603.2790199999998,485.48982000000007L603.1173599999998,484.03488000000004L605.2189499999998,483.54990000000004L606.3505699999998,482.25661L606.9972099999999,483.06491C606.9972099999999,483.06491,606.8355499999999,486.13646,607.6438599999999,486.13646C608.4521599999999,486.13646,611.8470299999999,486.78311,611.8470299999999,486.78311L615.8885399999999,488.72303L616.8584999999999,490.17798L619.76839,490.17798L620.9000199999999,491.14794L623.1632599999999,488.07639L623.1632599999999,486.62144L621.8699799999999,486.62144L618.47511,483.87322L612.6553299999999,483.06491L609.42212,480.80167L610.5537499999999,478.05344L612.8169899999999,478.37676000000005L612.9786499999999,477.73012000000006L611.2003899999999,476.76016000000004L611.2003899999999,476.27517000000006L614.4335999999998,476.27517000000006L616.2118599999999,473.20363000000003L614.9185799999999,471.26370000000003L614.5952599999999,468.51547000000005L613.1403099999999,468.67713000000003L611.2003899999999,470.77872L610.5537499999998,473.36529L607.4821999999998,472.71864L606.5122299999998,470.94038L608.2904999999998,469.00045L610.1938299999998,465.55485L609.1327299999998,463.14258L607.9670899999998,459.16125Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="LA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M631.55882,459.34458L631.3045599999999,460.60073L626.1314199999999,460.60073L624.67648,459.79243L622.57489,459.46911L615.7851499999999,461.40903L614.0068899999999,460.60073L611.4203199999998,464.8039L610.3177799999999,465.58192L609.1939499999999,463.09394000000003L608.0508299999999,459.20735L604.6214999999999,456.00664L605.7645999999999,450.46209L605.0787399999998,449.5476L603.2497599999998,449.77621999999997L595.3318399999998,450.64959L570.7853399999998,451.02296L570.0155999999998,448.7976L570.8889699999999,440.4208L574.0058099999999,434.74798999999996L579.2328799999999,425.60308999999995L578.7871399999999,423.17049L580.0239999999999,422.51424L580.4598699999999,420.59477L578.1423899999999,418.51579L578.0272699999998,416.37431L576.1915499999998,412.25322L576.0825499999997,406.29045L577.4100799999998,403.80948L577.1867799999998,400.39373L575.4172899999998,397.31114L576.9437099999998,395.82893L575.3730999999998,393.32939L575.8303499999998,391.67717999999996L577.4077499999999,385.15081L579.8936999999999,383.11445999999995L579.2520299999999,380.74748999999997L582.9099999999999,375.44496L585.7418599999999,374.08853999999997L585.5208899999999,372.41337999999996L585.2327599999999,370.73227999999995L588.1088199999999,365.1646099999999L590.45454,363.9330999999999L590.6061699999999,363.0400899999999L627.9496499999999,359.1589199999999L628.1345099999999,365.4422499999999L628.2961699999998,382.09330999999986L627.4878699999998,413.1321599999999L627.3262099999998,427.19664999999986L630.0744499999998,445.94928999999985L631.5588199999999,459.34457999999984Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="MS"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M569.19154,199.5843L569.45592,202.37050000000002L571.67964,202.94776000000002L572.6335799999999,204.17309000000003L573.1335899999999,206.02845000000002L576.9264299999999,209.38710000000003L577.6122999999999,211.77860000000004L576.9379599999999,215.20307000000005L575.3556499999999,218.43505000000005L574.5563099999998,221.17684000000006L572.3835599999999,222.77888000000004L570.6680499999999,223.35128000000003L565.0890299999999,225.21148000000002L563.6975699999998,229.06017000000003L564.4262099999999,230.43191000000002L566.2667199999999,232.11450000000002L565.9837899999999,236.15079000000003L564.2206399999999,237.68865000000002L563.44923,239.33179L563.5764499999999,242.10811L561.6901399999999,242.56535000000002L560.0646899999999,243.67026L559.7859,245.02289000000002L560.0646899999999,247.13781000000003L558.5136699999999,248.25388000000004L556.0431399999999,245.12060000000002L554.7805699999999,242.67073000000002L489.0447499999999,245.18558000000002L488.1267199999999,245.35102L486.07431999999994,240.83506L485.84569999999997,234.20499L484.24533999999994,230.08978000000002L483.55947999999995,224.83147000000002L481.27324999999996,221.17350000000002L480.35876999999994,216.37243L477.61528999999996,208.82788000000002L476.47218,203.45524000000003L475.10044,201.28333000000003L473.50007999999997,198.53987000000004L475.45405999999997,193.69604000000004L476.82579999999996,187.98047000000003L474.08232999999996,185.92286000000001L473.62507999999997,183.17939L474.53957999999994,180.66454000000002L476.25424999999996,180.66454000000002L558.90825,179.39506000000003L559.7425099999999,183.57818000000003L561.9946899999999,185.13915000000003L562.2513999999999,186.56224000000003L560.2218599999999,189.95155000000003L560.4122699999999,193.15707000000003L562.9271299999999,196.95527000000004L565.4539199999999,198.24889000000005L568.5332,198.75194000000005L569.1915399999999,199.58430000000004Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="IA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M475.23781,128.82439L474.78056000000004,120.36534999999999L472.95158000000004,113.04942999999999L471.12260000000003,99.56070499999998L470.66535000000005,89.72992699999999L468.83637000000004,86.30058399999999L467.23601,81.27088899999998L467.23601,70.98286899999998L467.92187,67.09628199999997L466.10094000000004,61.64461499999997L496.23336000000006,61.67988499999997L496.5566800000001,53.43520099999997L497.2033200000001,53.27353999999997L499.4665700000001,53.75852199999997L501.4064900000001,54.56682399999997L502.21479000000005,60.06327999999997L503.66974000000005,66.20637799999997L505.28634000000005,67.82298299999998L510.1361600000001,67.82298299999998L510.4594800000001,69.27792699999998L516.7642400000001,69.60124799999998L516.7642400000001,71.70283399999998L521.6140500000001,71.70283399999998L521.9373700000001,70.40954999999998L523.0689900000001,69.27792699999998L525.3322400000001,68.63128499999998L526.62552,69.60124799999998L529.5354100000001,69.60124799999998L533.4152600000001,72.18781499999999L538.7500600000001,74.61272199999999L541.17497,75.097704L541.65995,74.12774099999999L543.11489,73.64275899999998L543.5998699999999,76.55264799999999L546.18644,77.84593199999999L546.6714199999999,77.36094999999999L547.9647099999999,77.52261099999998L547.9647099999999,79.62419699999998L550.5512699999998,80.59415999999999L553.6228199999998,80.59415999999999L555.2394299999999,79.785857L558.4726399999998,76.55264799999999L561.0591999999998,76.06766699999999L561.8675099999998,77.84593199999999L562.3524899999998,79.139215L563.3224499999998,79.139215L564.2924099999998,78.330913L573.1837399999998,78.00759199999999L574.9619999999999,81.07914099999999L575.6086499999999,81.07914099999999L576.3222599999999,79.994862L580.76217,79.624197L580.1500699999999,81.903656L576.2113499999999,83.740781L566.96557,87.801909L562.19083,89.80880599999999L559.11928,92.39537399999999L556.69437,95.95190399999998L554.43113,99.83175499999999L552.65286,100.640059L548.1263700000001,105.651529L546.8330800000001,105.813189L542.5053000000001,108.570309L540.0424200000001,111.775419L539.8138000000001,114.966809L539.9082000000001,123.010159L538.5321600000001,124.698909L533.4506200000001,128.458879L531.22054,134.44128899999998L534.09229,136.67499899999999L534.77218,139.90197899999998L532.9169400000001,143.140909L533.0877300000001,146.888929L533.4565900000001,153.619329L536.4848400000001,156.621319L539.81384,156.621319L541.70495,159.753919L545.0841200000001,160.25718899999998L548.9432800000001,165.92865899999998L556.0305700000001,170.04540899999998L558.1737200000001,172.920529L558.8448700000001,179.360039L477.6333700000001,180.504829L477.29545000000013,144.827979L476.8382100000001,141.855889L472.7230000000001,138.426549L471.5798800000001,136.597569L471.5798800000001,134.997199L473.6374800000001,133.396849L475.0092200000001,132.02510900000001L475.2378500000001,128.82438900000002Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="MN"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M380.34313,320.82146L363.65894999999995,319.54815L362.77872999999994,330.50058L383.2441099999999,331.65746L415.2996599999999,332.96106000000003L412.9650599999999,357.37971000000005L412.5078099999999,375.21228L412.7364399999999,376.81264000000004L417.0802699999999,380.47060000000005L419.1378699999999,381.61371L419.82373999999993,381.38509000000005L420.50960999999995,379.32748000000004L421.88134999999994,381.15647L423.9389499999999,381.15647L423.9389499999999,379.78473L426.6824199999999,381.15647L426.2251799999999,385.04305L430.3403899999999,385.27167L432.8552299999999,386.41479L436.9704399999999,387.10066L439.4852899999999,388.92964L441.7715199999999,386.87204L445.2008599999999,387.5579L447.71570999999994,390.98724000000004L448.63018999999997,390.98724000000004L448.63018999999997,393.27347000000003L450.91641999999996,393.95933L453.20264,391.67311L455.03162999999995,392.35897L457.54646999999994,392.35897L458.4609699999999,394.87383L464.7620399999999,396.9528L466.1337799999999,396.26694000000003L467.9627599999999,392.15173000000004L469.10586999999987,392.15173000000004L470.2489899999999,394.20933L474.36419999999987,394.89520000000005L478.0221499999999,396.26694000000003L480.9942499999999,397.18143000000003L482.8232399999999,396.26694000000003L483.5090999999999,393.75209L487.8529299999999,393.75209L489.9105299999999,394.66658L492.6539999999999,392.60897L493.7971199999999,392.60897L494.4829899999999,394.20933L498.59818999999993,394.20933L500.19854999999995,392.15173000000004L502.02753999999993,392.60897000000006L504.0851399999999,395.12383000000005L507.2858499999999,396.9528000000001L510.48657999999995,397.86730000000006L512.42766,398.98623000000003L512.03856,361.76922L510.66680999999994,350.79524000000004L510.50634999999994,341.9229L509.06645999999995,335.38517L508.2882599999999,328.20553L508.2201599999999,324.38931L496.0833199999999,324.70805L449.6732799999999,324.25081L404.63436999999993,322.19319L380.34316999999993,320.82146Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="OK"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M361.46423,330.57358L384.15502,331.65952L415.24771,332.80264L412.9131,356.25844L412.61634,374.41196L412.68444,376.49375000000003L417.02827,380.31218L419.01492,381.75934L420.19913,381.19965L420.57250000000005,379.38193L421.71282,381.18555000000003L423.82446000000004,381.22945000000004L423.82146000000006,379.78236000000004L425.49140000000006,380.74963L426.6301000000001,381.1585L426.2708300000001,385.12615L430.3590200000001,385.21965L433.2843400000001,386.41682000000003L437.2390800000001,386.9422L439.6204600000001,389.02118L441.7445600000001,386.94501L445.4695000000001,387.55992000000003L447.6904100000001,390.78486000000004L448.7653700000001,391.10582000000005L448.6049000000001,393.07109L450.8185100000001,393.86338L453.1486600000001,391.80858L455.2816800000001,392.4235L457.5110600000001,392.459L458.4441300000001,394.89444000000003L464.77222000000006,397.00889L466.36527000000007,396.24196L467.85474000000005,392.06425L468.19546,392.06425L469.10195000000004,392.14585L470.331,394.21448L474.26088000000004,394.87976L477.59788000000003,396.00264L481.02351000000004,397.19861L482.86409000000003,396.22360999999995L483.57785,393.70876999999996L488.03107,393.75296999999995L489.83981,394.68375L492.63906,392.57723999999996L493.74269999999996,392.62143999999995L494.59373999999997,394.22650999999996L498.64845999999994,394.22650999999996L500.16732999999994,392.19789L502.03469999999993,392.60513L503.98072999999994,395.00840999999997L507.50129999999996,397.05255999999997L510.36006,397.86237L511.87368,398.66221L514.32038,400.65953L517.36342,399.33174L520.05451,400.47062L520.61832,406.57656L520.57852,416.27873L521.2643800000001,425.81274L521.9665600000001,429.41785000000004L524.6418900000001,433.83771L525.5400700000001,438.78844000000004L529.7560200000001,444.32646000000005L529.9520400000001,447.4714000000001L530.6984100000001,448.2572400000001L529.9683400000001,456.63731000000007L527.0962400000001,461.6438100000001L528.6292100000001,463.7966800000001L527.99913,466.1347600000001L527.32956,473.53908000000007L525.82524,476.8770800000001L526.12012,480.37943000000007L520.45524,481.96461000000005L510.59395,486.49111000000005L509.62399,488.43103L507.03742,490.37096L504.93584,491.82590000000005L503.64254999999997,492.6342L497.98443999999995,497.969L495.23620999999997,500.07059L489.90141,503.30379L484.2433,505.7287L477.93854,509.12357000000003L476.16028,510.57852L470.3405,514.13505L466.94563,514.78169L463.06578,520.27814L459.02427,520.6014700000001L458.0543,522.5413900000001L460.31755000000004,524.4813200000001L458.86260000000004,529.9777700000001L457.56932000000006,534.5042700000001L456.43770000000006,538.3841200000002L455.6294000000001,542.9106100000001L456.43770000000006,545.3355200000001L458.21596000000005,552.2869200000001L459.18593000000004,558.4300100000002L460.96419000000003,561.1782400000002L459.99423,562.6331900000002L456.92268,564.5731100000003L451.26456,560.6932600000002L445.76811000000004,559.5616400000002L444.47482,560.0466200000002L441.24161000000004,559.3999800000001L437.03844000000004,556.3284300000001L431.86531,555.1968100000001L424.26726,551.8019400000002L422.16568,547.9220800000002L420.87239,541.4556700000002L417.63919,539.5157400000002L416.99253999999996,537.2524900000002L417.63919,536.6058500000001L417.96251,533.2109800000002L416.66922,532.5643400000001L416.02258,531.5943800000001L417.31586,527.2295400000002L415.69926,524.9663000000002L412.46605,523.6730100000002L409.07117999999997,519.3081800000002L405.51464999999996,512.6801000000003L401.31147999999996,510.09353000000027L401.47313999999994,508.1536100000003L396.13833999999997,495.8674100000003L395.33004,491.6642400000003L393.55178,489.7243200000003L393.39012,488.2693700000003L387.40868,482.9345800000003L384.82211,479.8630300000003L384.82211,478.73140000000035L382.23554,476.62982000000034L375.4458,475.49819000000036L368.00942000000003,474.8515500000004L364.93787000000003,472.5883100000004L360.41138,474.36657000000037L356.85485,475.82152000000036L354.59159999999997,479.0547200000004L353.62163999999996,482.7729200000004L349.25681,488.91601000000037L346.83189999999996,491.3409200000004L344.24532999999997,490.37096000000037L342.46707,489.2393300000004L340.52714,488.5926900000004L336.64729,486.3294500000004L336.64729,485.6828000000004L334.86903,483.7428800000004L329.69589,481.6412900000004L322.25951000000003,473.8815900000004L319.99626,469.1934400000004L319.99626,461.1104100000004L316.76305,454.6439900000004L316.27807,451.89577000000037L314.66147,450.9258000000004L313.52984000000004,448.82422000000037L308.51837000000006,446.7226300000004L307.2250900000001,445.1060300000004L300.1120200000001,437.18466000000035L298.8187400000001,433.95145000000036L294.1305800000001,431.68820000000034L292.6756300000001,427.32333000000034L290.0890400000001,424.4134600000003L288.1491300000001,423.9285000000003L287.49990000000014,419.25086000000033L295.50177000000014,419.9367500000003L324.53676000000013,422.6802000000003L353.5718400000001,424.2805600000003L355.8053700000001,404.81874000000033L359.6919200000001,349.2637200000003L361.2923100000001,330.5164000000003L362.6640500000001,330.5450000000003M461.6934000000001,560.2077400000003L461.1275900000001,553.0946600000003L458.3793500000001,545.9007400000003L457.8135300000001,538.8684900000003L459.3493100000001,530.6237800000002L462.6633700000001,523.7531900000002L466.1390700000001,518.3375400000002L469.2914700000001,514.7809900000002L469.9381100000001,515.0234900000002L465.1691100000001,521.6515900000002L460.8042700000001,528.1988700000002L458.78350000000006,534.8269600000002L458.46018000000004,540.0001200000003L459.34931000000006,546.1432400000002L461.9358900000001,553.3371600000003L462.4208700000001,558.5103000000003L462.5825300000001,559.9652600000003L461.69340000000005,560.2077400000003Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="TX"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M288.15255,424.01315L287.37714,419.26505L296.02092,419.79044999999996L326.19268,422.73634999999996L353.46084,424.42623999999995L355.67611,405.71876999999995L359.53346999999997,349.84279999999995L361.27115,330.45356999999996L362.84285,330.58212999999995L363.66825,319.41873999999996L259.6638,308.78279L242.16644999999997,429.21759999999995L257.62712,431.20674999999994L258.9204,421.18379999999996L288.15254999999996,424.01314999999994Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="NM"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M507.88059,324.38028L495.26232999999996,324.58471000000003L449.17323999999996,324.12748000000005L404.61575999999997,322.06985000000003L379.98601999999994,320.81244000000004L383.87980999999996,256.21747000000005L405.96326999999997,256.89264000000003L446.25239999999997,257.73404000000005L490.55364,258.72162000000003L495.64927,258.72162000000003L497.83367,260.88402L499.85132999999996,260.86262L501.49163,261.87509L501.42913,264.88432L499.60015,266.60969L499.2679,268.84186L501.11098,272.24419L504.06334,275.43925L506.39069,277.05371L507.69146,288.29453L507.88059,324.38026Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="KS"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M486.09787,240.70058L489.32848,247.72049L489.19985,250.02301L492.65907000000004,255.51689L495.37836000000004,258.66922999999997L490.32888,258.66922999999997L446.84632000000005,257.73055L406.05946000000006,256.84024999999997L383.80724000000004,256.05638L384.88001,234.72852999999998L352.56177,231.80827999999997L356.90560000000005,187.79841999999996L372.45193000000006,188.82722999999996L392.57072000000005,189.97032999999996L410.40329,191.11344999999997L434.18005000000005,192.25655999999998L444.92531,191.79931999999997L446.98291,194.08553999999998L451.78399,197.05764L452.9271,197.97213L457.27093,196.60039L461.15752000000003,196.14315L463.90099000000004,195.91451999999998L465.72997000000004,197.28625999999997L469.78740000000005,198.88661999999997L472.75949,200.48697999999996L473.21674,202.08733999999995L474.13123,204.14493999999996L475.96021,204.14493999999996L476.75819,204.19113999999996L477.65242,208.87295999999995L480.57268,217.34087999999994L481.14520999999996,221.09758999999994L483.66869999999994,224.87183999999993L484.23828999999995,229.98597999999993L485.84552999999994,234.22634999999994L486.09786999999994,240.70060999999993Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="NE"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M476.44687,204.02465L476.39947,203.44378L473.50376,198.59834L475.36399,193.88623L476.85672,187.99969000000002L474.07484999999997,185.91998L473.68969,183.17652L474.48208999999997,180.62217L477.6706,180.63737L477.54751999999996,175.63123000000002L477.21421999999995,145.45698000000002L476.59648999999996,141.6894L472.52416999999997,138.35847L471.54154,136.68151L471.47904,135.07269L473.50115999999997,133.54328999999998L475.03337999999997,131.87761999999998L475.27833999999996,129.22082999999998L417.02124999999995,127.62047999999997L362.22203999999994,124.17138999999997L356.89676999999995,187.86257999999998L371.4870399999999,188.76637999999997L391.43688999999995,189.97198999999998L409.17993999999993,190.90058L432.95669999999996,192.20416L444.9394,191.77952L446.90569999999997,194.0247L452.10033999999996,197.27805L452.86422999999996,198.0008L457.40567,196.54799L463.94621,195.93308L465.62151,197.26935L469.82602,198.86548L472.77108000000004,200.50131L473.17006000000003,201.98512L474.20955000000004,204.226L476.44692000000003,204.02464Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="SD"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M475.30528,128.91846L474.69037,120.48479L473.01342,113.66887L471.12193,100.64465L470.66469,89.657624L468.92523,86.580482L467.16862,81.386086L467.19982,70.941816L467.82318,67.117729L465.98908,61.649967999999994L437.34683,61.08594099999999L418.75588,60.43929899999999L392.24356,59.14601499999999L369.29722,57.012145999999994L362.30397999999997,124.18897999999999L417.23621999999995,127.53262999999998L475.30522999999994,128.91845999999998Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="ND"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M360.37668,143.27587L253.63408000000004,129.81880999999998L239.55060000000003,218.27684L352.81521000000004,231.86233L360.37668,143.27587Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="WY"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M369.20952,56.969133L338.5352,54.1613L309.27464999999995,50.604769999999995L280.01410999999996,46.563258L247.68200999999996,41.228463L229.25271999999995,37.833593L196.52906999999996,30.900857000000002L192.05004999999997,52.248389L195.47938999999997,59.792930000000005L194.10764999999998,64.36538200000001L195.93662999999998,68.93783300000001L199.13735999999997,70.30957200000002L203.75817999999998,81.07902500000002L206.45327999999998,84.25554800000002L206.91052,85.39866600000002L210.33986,86.54178400000002L210.79710999999998,88.59937700000002L203.70980999999998,106.20333000000002L203.70980999999998,108.71818000000002L206.22465999999997,111.91889000000002L207.13913999999997,111.91889000000002L211.94020999999998,108.94680000000002L212.62608999999998,107.80368000000003L214.22644999999997,108.48955000000002L213.99781999999996,113.74787000000002L216.74129999999997,126.32212000000001L219.71338999999998,128.83696L220.62786999999997,129.52283L222.45685999999998,131.80905L221.99961,135.2384L222.68547999999998,138.66773L223.8286,139.58223L226.11482,137.29600000000002L228.85829,137.29600000000002L232.05901,138.89636000000002L234.57386,137.98187000000001L238.68907,137.98187000000001L242.34702,139.58223L245.0905,139.12498000000002L245.54774,136.15288L248.51983,135.46702000000002L249.89157,136.83876L250.34882,140.03947L251.77469,140.87411L253.66164,129.83937L360.40731,143.26829L369.20952,56.969133000000014Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="MT"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M380.03242,320.96457L384.93566,234.63960999999998L271.5471,221.99564999999998L259.33328,309.93480999999997L380.03242,320.96457Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="CO"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M148.47881,176.48395L157.24968,141.26323L158.62142,137.03370999999999L161.13626,131.08953L159.87884,128.8033L157.36398,128.91761L156.56381,127.88880999999999L157.02105999999998,126.7457L157.36397999999997,123.65929L161.82212999999996,118.17233999999999L163.65110999999996,117.71509999999999L164.79421999999997,116.57199L165.36577999999997,113.37127L166.28025999999997,112.68540999999999L170.16684999999998,106.85552999999999L174.05344,102.51169999999999L174.28206,98.739432L170.85272,96.11026899999999L169.31717,91.70928599999999L182.94208,28.367594999999994L196.45967000000002,30.895705999999993L192.05159,52.278718999999995L195.61194,59.764070999999994L194.03083,64.424911L196.00068000000002,69.066144L199.1389,70.32133499999999L202.97424,79.877923L206.48693,84.315077L206.99418,85.458195L210.33513,86.601313L210.70398,88.69838800000001L203.73297,106.07448000000001L203.56779,108.64041L206.19891,111.96211L207.10399,111.91320999999999L212.01528000000002,108.88761L212.69270000000003,107.79263999999999L214.25501000000003,108.4515L213.97657000000004,113.80521999999999L216.71582000000004,126.38793L220.63365000000005,129.56584L222.31483000000006,131.73129L221.59822000000005,135.81515L222.66444000000004,138.62256L223.72607000000005,139.71384L226.20536000000004,137.36242000000001L229.05352000000005,137.41132000000002L231.97277000000005,138.74652L234.75279000000006,138.06459L238.54705000000007,137.90411L242.52595000000008,139.50447L245.26943000000009,139.20771L245.76617000000007,136.1704L248.69876000000008,135.40557L249.95893000000007,136.92148L250.39986000000007,139.86644L251.82420000000008,141.07965000000002L243.43820000000008,194.68831C243.43820000000008,194.68831,155.47221000000008,177.9877,148.47881000000007,176.48396Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="ID"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M259.49836,310.10509L175.74933,298.23284L196.33694,185.69149000000002L243.11725,194.43663L241.63245,205.06705L239.32083,218.23971L247.12852,219.16808L263.53504,220.97287L271.74600999999996,221.82851L259.49835999999993,310.10509Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="UT"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M144.9112,382.62909L142.28419,384.78742L141.96087,386.24237L142.44585,387.21233L161.36012,397.88192000000004L173.48466,405.47996000000006L188.19575999999998,414.0479700000001L205.00844999999998,424.07092000000006L217.29465,426.49583000000007L242.24581,429.20074000000005L259.50142,310.07367000000005L175.76578999999998,298.15642L172.6734,314.56888000000004L171.06710999999999,314.58418000000006L169.35243999999997,317.2133400000001L166.83758999999998,317.09902000000005L165.58016999999998,314.35555000000005L162.83669999999998,314.01262L161.92219999999998,312.86951000000005L161.00771999999998,312.86951000000005L160.09321999999997,313.44107L158.14992999999998,314.46987L158.03563,321.44285L157.80698999999998,323.15752000000003L157.23545,335.73176L155.74939999999998,337.90367000000003L155.17783999999997,341.2187L157.92130999999998,346.13409L159.17872999999997,351.96397L159.97891999999996,352.99277L161.00771999999995,353.56433L160.89339999999996,355.85055L159.29304999999997,357.22228L155.86370999999997,358.93695L153.92041999999998,360.88025000000005L152.43436999999997,364.5382000000001L151.86280999999997,369.4535900000001L149.00502999999998,372.1970600000001L146.94742999999997,372.8829300000001L147.08311999999998,373.7128100000001L146.62587,375.4274800000001L147.08311999999998,376.2276600000001L150.74107999999998,376.79920000000016L150.16951999999998,379.54268000000013L148.68346999999997,381.71459000000016L144.91119999999998,382.62908000000016Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="AZ"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M196.39273,185.57552L172.75382,314.39827L170.92157999999998,314.74742000000003L169.34882,317.15360000000004L166.97588,317.1643L165.50393,314.42083L162.88546,314.04241L162.11454,312.93478000000005L161.07671,312.8807800000001L158.29834,314.5250700000001L157.98808,321.3105500000001L157.62599,327.0877200000001L157.27742,335.6805300000001L155.83032,337.7696900000001L153.3914,336.6956600000001L84.311514,232.4944700000001L103.30063,164.9095600000001L196.39273,185.5755700000001Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="NV"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M148.72184,175.53153L157.57154,140.73002L158.62233,136.5005L160.9767,130.87726999999998L160.36119,129.71438999999998L157.84633,129.66818999999998L156.56473,127.99748999999998L157.02197,126.53341999999998L157.52538,123.28653999999997L161.98353,117.79958999999997L163.81251,116.70043999999997L164.95562,115.55732999999998L166.44166,111.99169999999998L170.48872,106.32229999999998L174.05435,102.45989999999999L174.28297,99.008586L171.01411000000002,96.53990399999999L169.2307,91.897279L156.56693,88.285309L141.47784000000001,84.741659L126.04582000000002,84.855965L125.58858000000002,83.484236L120.10163000000003,85.54184L115.64349000000003,84.970281L113.24295000000002,83.36992L111.98553000000003,84.05579499999999L107.29877000000002,83.82716299999998L105.58410000000002,82.45543399999998L100.32578000000002,80.39782999999998L99.52559800000002,80.51214599999999L95.18176800000002,79.02608999999998L93.23847700000002,80.85507299999998L87.06566500000002,80.51214599999997L81.12148200000003,76.39693699999998L81.80734700000004,75.59675699999998L82.03596800000004,67.82358399999998L79.74974300000004,63.93700699999998L75.63453500000004,63.36544799999998L74.94867000000004,60.850600999999976L72.59473800000004,60.38403599999997L66.79621300000004,62.442819999999976L64.53296600000004,68.90923799999997L61.29975700000004,78.93218699999997L58.06654700000004,85.39860599999997L53.05507300000004,99.46306699999997L46.58865400000004,113.04253999999997L38.50563100000004,125.65205999999998L36.56570500000004,128.56194999999997L35.75740300000004,137.12994999999998L36.14349800000004,149.21017999999998L148.72184000000004,175.53150999999997Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="OR"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M102.07324,7.6117734L106.43807,9.0667177L116.1377,11.814945999999999L124.7057,13.754871L144.7516,19.412988L167.70739,25.071104L182.93051,28.278277L169.29815,91.864088L156.85315,88.33877L141.34514,84.768091L126.11584999999998,84.801331L125.66027999999999,83.456632L120.06105999999998,85.635925L115.46562999999998,84.899181L113.31865999999998,83.315127L112.00544999999998,83.97310300000001L107.26978999999999,83.83286000000001L105.57142999999999,82.48322700000001L100.30838999999999,80.37092400000002L99.57341899999999,80.51784200000002L95.18429699999999,78.99339400000001L93.29099899999999,80.81077300000001L87.02509299999998,80.51204000000001L81.09939499999999,76.38633800000001L81.87835199999999,75.45357500000001L81.999575,67.77612300000001L79.717576,63.936422000000015L75.602368,63.32938200000002L74.924958,60.81876600000002L72.649446,60.361834000000016L69.094498,61.592410000000015L66.83125100000001,58.37316300000001L67.15457200000002,55.46327400000001L69.90280000000001,55.13995300000001L71.51940500000002,51.09844200000001L68.93283700000002,49.96681800000001L69.09449800000002,46.24862700000001L73.45933100000002,45.60198600000001L70.71110300000002,42.85375800000001L69.25615800000003,35.74069700000001L69.90280000000003,32.83080900000001L69.90280000000003,24.90944600000001L68.12453500000002,21.67623600000001L70.38778200000002,12.29992900000001L72.48936800000001,12.784910000000009L74.91427500000002,15.694799000000009L77.66250300000002,18.28136600000001L80.89571200000002,20.22129200000001L85.42220500000002,22.32287800000001L88.49375600000002,22.96952000000001L91.40364500000003,24.42446400000001L94.79851800000003,25.39442700000001L97.06176400000003,25.23276700000001L97.06176400000003,22.80785900000001L98.35504800000002,21.67623600000001L100.45663000000002,20.38295200000001L100.77996000000002,21.51457600000001L101.10328000000001,23.29284100000001L98.84002900000002,23.77782200000001L98.51670800000001,25.879408000000012L100.29497,27.33435300000001L101.42660000000001,29.759260000000012L102.07324000000001,31.69918500000001L103.52818,31.53752500000001L103.68984,30.24424100000001L102.71988,28.95095700000001L102.23490000000001,25.71774800000001L103.04320000000001,23.93948300000001L102.39656000000001,22.48453900000001L102.39656000000001,20.22129200000001L104.17483000000001,16.66476200000001L103.04320000000001,14.07819400000001L100.61829000000002,9.22838010000001L100.94162000000001,8.42007780000001L102.07324000000001,7.611775400000011ZM92.616548,13.590738L94.637312,13.429078L95.122294,14.803197L96.658073,13.186582000000001L99.002155,13.186582000000001L99.810458,14.722361000000001L98.274678,16.419801L98.92133,17.228113999999998L98.193853,19.248874999999998L96.81973400000001,19.653021C96.81973400000001,19.653021,95.93059600000001,19.733860999999997,95.93059600000001,19.410536C95.93059600000001,19.087215,97.385551,16.823958,97.385551,16.823958L95.688111,16.258141000000002L95.36479,17.713095000000003L94.637312,18.359737000000003L93.10153,16.096480000000003L92.616548,13.590738000000004Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="WA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                    <path fill="#343434" stroke="#5d5d5d"
                                                          d="M144.69443,382.19813L148.63451,381.70950999999997L150.12055,379.69807L150.66509000000002,376.75698L147.11357,376.16686L146.5994,375.49863999999997L147.0769,373.46632999999997L146.91762,372.87665999999996L148.84019,372.25706999999994L151.88297,369.42438999999996L152.46453,364.42929L153.84443,361.02718L155.78771999999998,358.86091999999996L159.30658999999997,357.27124999999995L160.96097999999998,355.66641999999996L161.02967999999998,353.55758L160.03635,352.97756999999996L159.0132,351.90484L157.85798,346.05638999999996L155.17278,341.2263L155.73859,337.7213L153.31901,336.69199L84.25768799999999,232.51358999999997L103.15979999999999,164.91209999999995L36.07993699999999,149.21413999999996L34.57304099999999,153.94737999999995L34.41137999999999,161.38375999999994L29.238244999999985,173.18496999999994L26.166696999999985,175.77153999999993L25.843375999999985,176.90315999999993L24.065109999999986,177.71146999999993L22.610165999999985,181.91463999999993L21.801863999999984,185.14784999999995L24.550091999999985,189.35101999999995L26.166696999999985,193.55418999999995L27.298319999999986,197.11071999999996L26.974998999999986,203.57713999999996L25.196733999999985,206.64868999999996L24.550091999999985,212.46846999999997L23.580128999999985,216.18665999999996L25.358393999999986,220.06650999999997L28.106621999999987,224.59299999999996L30.369868999999987,229.44281999999995L31.663151999999986,233.48432999999994L31.339831999999987,236.71753999999996L31.016510999999987,237.20251999999996L31.016510999999987,239.30409999999998L36.67462699999999,245.60885999999996L36.18964599999999,248.03376999999998L35.54300399999999,250.29701999999997L34.89636199999999,252.23693999999998L35.05802199999999,260.48163L37.159607999999984,264.19982L39.099533999999984,266.78638L41.84776199999998,267.27137L42.81772499999998,270.01959L41.686101999999984,273.57612L39.58451499999998,275.19273L38.452891999999984,275.19273L37.64458999999999,279.07257999999996L38.129570999999984,281.98247L41.362780999999984,286.34729999999996L42.979384999999986,291.68209999999993L44.434328999999984,296.37024999999994L45.727612999999984,299.44179999999994L49.12248299999998,305.2615799999999L50.57742699999998,307.84813999999994L51.06240899999998,310.75802999999996L52.67901299999998,311.72799L52.67901299999998,314.1529L51.870710999999986,316.09283L50.09244599999999,323.20589L49.607463999999986,325.14581L52.03237199999999,327.89403999999996L56.23554399999999,328.37901999999997L60.76203699999999,330.15729L64.641888,332.25887L67.551777,332.25887L70.461665,335.33042L73.048232,340.18024L74.179856,342.44348L78.059707,344.54507L82.909521,345.35337L84.364465,347.45495999999997L85.011107,350.68816999999996L83.556163,351.33480999999995L83.879484,352.30476999999996L87.112695,353.11306999999994L89.860923,353.27473999999995L93.020812,351.58788999999996L96.900666,355.79105999999996L97.708968,358.05431L100.29554,362.25748L100.61886,365.49069L100.61886,374.86699999999996L101.10383999999999,376.64525999999995L111.12678999999999,378.10020999999995L130.84936,380.84842999999995L144.6944,382.19812999999994ZM56.559218000000016,338.48145L57.85250600000001,340.01723L57.690846000000015,341.31052L54.457625000000014,341.22972L53.89181100000001,340.01725999999996L53.24516700000001,338.56230999999997L56.55921800000001,338.48150999999996ZM58.499150000000014,338.48145L59.71160800000001,337.83481L63.26815100000001,339.9364L66.33971100000001,341.14885L65.45057500000001,341.79551L60.92406600000002,341.55301L59.307456000000016,339.9364L58.499150000000014,338.48145ZM79.191764,358.28493L80.97002900000001,360.62901L81.77834200000001,361.59898L83.31412100000001,362.16479L83.87992800000002,360.70984L82.90996500000001,358.93156999999997L80.24256200000002,356.91080999999997L79.19176400000002,357.07246999999995L79.19176400000002,358.28493ZM77.73680900000001,366.93379L79.51508500000001,370.08618L80.72754300000001,372.02612L79.27258900000001,372.2686L77.97930500000001,371.05615C77.97930500000001,371.05615,77.25182800000002,369.6012,77.25182800000002,369.19704C77.25182800000002,368.79290000000003,77.25182800000002,367.01462000000004,77.25182800000002,367.01462000000004L77.73680900000002,366.93382Z"
                                                          stroke-width="1" stroke-linejoin="round" data-id="CA"
                                                          data-type="area" class="area"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round;"></path>
                                                </svg>
                                                <div class="mapTooltip" style="display: none;"></div>
                                                <div class="zoomButton zoomReset" title="Reset zoom">•</div>
                                                <div class="zoomButton zoomIn" title="Zoom in">+</div>
                                                <div class="zoomButton zoomOut" title="Zoom out">−</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                                        <div class="description-block mb-4">
                                            <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                            <h5 class="description-header">8390</h5>
                                            <span class="description-text">Visits</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class="description-block mb-4">
                                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                            <h5 class="description-header">30%</h5>
                                            <span class="description-text">Referrals</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class="description-block">
                                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                            <h5 class="description-header">70%</h5>
                                            <span class="description-text">Organic</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div><!-- /.card-pane-right -->
                                </div><!-- /.d-md-flex -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Info Boxes Style 2 -->
                        <div class="info-box mb-3 bg-warning">
                            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Inventory</span>
                                <span class="info-box-number">5,200</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-success">
                            <span class="info-box-icon"><i class="far fa-heart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Mentions</span>
                                <span class="info-box-number">92,050</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-danger">
                            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Downloads</span>
                                <span class="info-box-number">114,381</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-info">
                            <span class="info-box-icon"><i class="far fa-comment"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Direct Messages</span>
                                <span class="info-box-number">163,921</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Browser Usage</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="chart-responsive">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="pieChart" height="99" width="199"
                                                    style="display: block; width: 199px; height: 99px;"
                                                    class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <!-- ./chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <ul class="chart-legend clearfix">
                                            <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                            <li><i class="far fa-circle text-success"></i> IE</li>
                                            <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                            <li><i class="far fa-circle text-info"></i> Safari</li>
                                            <li><i class="far fa-circle text-primary"></i> Opera</li>
                                            <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            United States of America
                                            <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            India
                                            <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            China
                                            <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /.card -->

                        <!-- PRODUCT LIST -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recently Added Products</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Samsung TV
                                                <span class="badge badge-warning float-right">$1800</span></a>
                                            <span class="product-description">
                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Bicycle
                                                <span class="badge badge-info float-right">$700</span></a>
                                            <span class="product-description">
                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">
                                                Xbox One <span class="badge badge-danger float-right">
                        $350
                      </span>
                                            </a>
                                            <span class="product-description">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="dist/img/default-150x150.png" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">PlayStation 4
                                                <span class="badge badge-success float-right">$399</span></a>
                                            <span class="product-description">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">View All Products</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkutuphane\laravelkutuphane\resources\views/admin/index.blade.php ENDPATH**/ ?>
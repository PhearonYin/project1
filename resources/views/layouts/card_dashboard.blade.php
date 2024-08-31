{{-- Card dashboard --}}
<div class="row">
    <div class="col-xl-12 d-flex">

        <div class="card flex-fill student-space comman-shadow">
            <div class="card-header d-flex align-items-center ">
                <h5 class=" font_kh_mool">ទិន្នន័យរបស់មន្ត្រីពន្ធនាគារ</h5>
                <ul class="chart-list-out student-ellips">
                    <li class="star-menus"><a href="users\create">
                        <button>
                            <i class="">
                            create New
                            </i>
                        </button>
                   
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table star-student table-hover table-center table-borderless table-striped">
                        <thead class="thead-light font_kh_mool">
                            <tr>
                                <th>ល.រ</th>
                                <th>នាម គោលនាម</th>
                                <th class="text-center">ភេទ</th>
                                <th class="text-center">អត្តលេខ</th>
                                <th class="">ឋានន្តរស័ក្តិ</th>
                                <th class="">តួនាទី</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="font_kh_Sr">
                                <td class="text-nowrap">
                                    <div>០០១</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{asset('assets')}}/img/profiles/avatar-02.jpg" width="25"
                                            alt="Star Students">
                                        យិន ភារុណ
                                    </a>
                                </td>
                                <td class="text-center">ប្រុស</td>
                                <td class="text-center">៣៤៥៧</td>
                                <td class="">
                                    <div>អនុរក្សថ្នាក់លេខ២</div>
                                </td>
                                <td class="">មន្ត្រី</td>
                            </tr>
                            <tr class="font_kh_Sr">
                                <td class="text-nowrap">
                                    <div>០០២</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{asset('assets')}}/img/profiles/avatar-02.jpg" width="25"
                                            alt="Star Students">
                                        ភារុណ នរាយ៍
                                    </a>
                                </td>
                                <td class="text-center">ប្រុស</td>
                                <td class="text-center">៣៤៥៧</td>
                                <td class="">
                                    <div>អនុរក្សថ្នាក់លេខ២</div>
                                </td>
                                <td class="">មន្ត្រី</td>
                            </tr>
                            <tr class="font_kh_Sr">
                                <td class="text-nowrap">
                                    <div>០០៣</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{asset('assets')}}/img/profiles/avatar-02.jpg" width="25"
                                            alt="Star Students">
                                        ភារុណ នីរន្ត
                                    </a>
                                </td>
                                <td class="text-center">ស្រី</td>
                                <td class="text-center">៣៤៥៧</td>
                                <td class="">
                                    <div>អនុរក្សថ្នាក់លេខ២</div>
                                </td>
                                <td class="">មន្ត្រី</td>
                            </tr>
                          
                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    
</div>
@yield('card_dashboard')
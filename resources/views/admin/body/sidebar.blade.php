 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ url('/dashboard') }}" class="waves-effect">
                                    <i class="ri-home-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-hotel-fill"></i>
                <span>Expense Sources</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('supplier.all') }}">All Expense Source</a></li>

            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-shield-user-fill"></i>
                <span>Income Sources</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('customer.all') }}">All Income Source</a></li>
                 <li><a href="{{ route('credit.customer') }}">Credit Income Source</a></li>

                 <li><a href="{{ route('paid.customer') }}">Paid Income Source</a></li>
                  <li><a href="{{ route('customer.wise.report') }}">Income Source Wise Report</a></li>

            </ul>
        </li>


         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-delete-back-fill"></i>
                <span>Units</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('unit.all') }}">All Unit</a></li>

            </ul>
        </li>

         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-apps-2-fill"></i>
                <span>Categories</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('category.all') }}">All Category</a></li>

            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-reddit-fill"></i>
                <span>Objects</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('product.all') }}">All Object</a></li>

            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-oil-fill"></i>
                <span>Expenses</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('purchase.all') }}">All Expense</a></li>
                <li><a href="{{ route('purchase.pending') }}">Approval Expense</a></li>
                <li><a href="{{ route('daily.purchase.report') }}">Daily Expense Report</a></li>

            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-compass-2-fill"></i>
                <span>Incomes</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('invoice.all') }}">All Income</a></li>
                <li><a href="{{ route('invoice.pending.list') }}">Approval Income</a></li>
                <li><a href="{{ route('print.invoice.list') }}">Print Income List</a></li>
                  <li><a href="{{ route('daily.invoice.report') }}">Daily Income Report</a></li>

            </ul>
        </li>







                            <li class="menu-title">Stock</li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-gift-fill"></i>
            <span>Stock</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('stock.report') }}">Stock Report</a></li>
            <li><a href="{{ route('stock.supplier.wise') }}">Source / Object Wise </a></li>

        </ul>
    </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Support</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-invoice.html">Income</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>






                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>

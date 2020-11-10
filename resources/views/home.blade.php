
@extends('layouts.dashbord')

@section('dashbord')

<div class="row d-flex ">
    <!-- container section start -->
    <section id="container">

    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="fa fa-bars"></i></div>
        </div>

        <!--logo start-->
        <a href="{{url('/')}}" class="logo">SAP SAP <span class="lite">CLEANING</span></a>
        <!--logo end-->

        <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">
        <li ><a href="{{url('/')}}"   onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Se deconnecter</a> </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </ul>
        </div>
    </header>
            <!--header end-->
            <!--sidebar start-->
            <aside class="d-flex marge">
                <div id="sidebar" class="nav-collapse mr-5">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="{{url('admin')}}">
                                    <i class="icon_house_alt"></i>
                                    <span>Dashboard</span>
                                </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                                    <i class="icon_document_alt"></i>
                                    <span>Formulaires</span>
                                    <span class="menu-arrow arrow_carrot-right"></span>
                                </a>
                        <ul class="sub">
                        <li><a class="" href="{{url('formpressing')}}">Formulaire Pressing</a></li>
                        <li><a class="" href="{{url('formcare')}}">Formulaire Care wash</a></li>
                        <li><a class="" href="{{url('formmenagere')}}">Formulaire Menagère</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                                    <i class="icon_table"></i>
                                    <span>Tables</span>
                                    <span class="menu-arrow arrow_carrot-right"></span>
                                </a>
                        <ul class="sub">
                        <li><a class=""  href="{{url('liste-pressing')}}"> Liste pressing</a></li>
                        <li><a class=""  href="{{url('liste-carewash')}}"> Liste care wash</a></li>
                        <li><a class=""  href="{{url('liste-menagere')}}"> Liste Aide ménagère</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                                    <i class="icon_documents_alt"></i>
                                    <span>Pages</span>
                                    <span class="menu-arrow arrow_carrot-right"></span>
                                </a>
                        <ul class="sub">
                        <li><a class="" href="{{url('liste-assistance')}}">Assistance</a></li>
                        <li><a class="" href="{{url('liste-reservation')}}">Reservation</a></li>
                        <li><a class="" href="{{url('liste-contactez')}}"><span>Contact Page</span></a></li>
                        </ul>
                    </li>

                     </ul>
                    <!-- sidebar menu end-->
                     </div>

              </aside>
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                     <section class="wrapper">
                    <!--overview start-->
                    @yield('formulaires')
                    <!--/.row-->
                     </section>
            </section>



            <!--main content end-->
        </section>
            <!-- container section start -->
</div>
@endsection






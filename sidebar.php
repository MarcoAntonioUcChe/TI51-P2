        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                   
                    <li class="<?php if(isset($active2)){echo $active2;}?>">
                        <a href="incidencias.php"><i class="fa fa-book"></i>Incidencias</a>
                    </li>

                    <li class="<?php if(isset($active3)){echo $active3;}?>">
                        <a href="zonas.php"><i class="fa fa-building"></i>Zonas Comerciales</a>
                    </li>
                     <li class="">
                        <a href="empleados.php"><i class="fa fa-users"></i> Empleados</a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-users"></i> Ingresos</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div> 
    
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/profiles/<?php echo $profile_pic;?>" alt=""><?php echo $name;?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="perfil.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                            <li><a href="action/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div> 
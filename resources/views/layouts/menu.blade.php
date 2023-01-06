                @foreach ($menu as $item=>$value)
                                 
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                        <span class="nk-menu-text">{{$value->menu_name}}</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        @foreach ($submenu as $key=>$sub)
                                            @if ($value->menu_id == $sub->menu_id )
                                            
                                                <li class="nk-menu-item">
                                                    <a href="{{$sub->url}}" class="nk-menu-link"><span class="nk-menu-text">{{$sub->submenu_name}}</span></a>
                                                </li>
                                            @endif 
                                        @endforeach

                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

            @endforeach
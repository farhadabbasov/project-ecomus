@extends('layouts.ap')

@section('content')

        <!-- page-title -->
        <div class="tf-page-title style-2">
            <div class="container-full">
                <div class="heading text-center">Brands</div>
            </div>
        </div>
        <!-- /page-title -->
        <!-- filter -->
        <section class="flat-spacing-1">
            <div class="container tf-brands-filter-wrap">
                <div class="tf-brands-filter">
                    <button class="tf-btns-filter tf-tab-link tf-tab-link_all is--active" id="all">
                        <span>Show all</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_123">
                        <span>123</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_a">
                        <span>A</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_b">
                        <span>B</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_c">
                        <span>C</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_d">
                        <span>D</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_e">
                        <span>E</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_f">
                        <span>F</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_g">
                        <span>G</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_h">
                        <span>H</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_i">
                        <span>I</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_j">
                        <span>J</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_k">
                        <span>K</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_l">
                        <span>L</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_n">
                        <span>N</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_o">
                        <span>O</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_p">
                        <span>P</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_q">
                        <span>Q</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_r">
                        <span>R</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_s">
                        <span>S</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_t">
                        <span>T</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_u">
                        <span>U</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_v">
                        <span>V</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_w">
                        <span>W</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_x">
                        <span>X</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link is-disable" id="tf_filter_y">
                        <span>Y</span>
                    </button>
                    <button class="tf-btns-filter tf-tab-link" id="tf_filter_z">
                        <span>Z</span>
                    </button>
                </div>
                <div id="parent" class="tf-brands-source-linklist d-grid">
                    <div class="tf_filter_123 tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">123</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html" target="_blank">7 Chanel</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_a tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">A</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Asos</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Armani</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Asics</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_b tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">B</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Burberry</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Bogner</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_c tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">C</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Christian Dior</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Chopard</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Catier</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Calvin Klein</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Cole Haan</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_d tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">D</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_e tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">E</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Escada Beaute</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_f tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">F</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Furla</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Fendi</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Foot Locker</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_g tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">G</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_h tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">H</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Hugo Boss</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Hermes</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_i tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">I</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Iwc Schaffhausen</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_j tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">J</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Jaeger Le Coultre</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Just Cavalli</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_k tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">K</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_l tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">L</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Longines</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_n tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">N</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Nice West</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_o tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">O</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Old Navy</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Oakley</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_p tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">P</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Parda</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Patek philippe</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Patagonia</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_q tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">Q</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_r tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">R</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Ray Ban</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Roberto Cavalli</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_s tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">S</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Steve Madden</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_t tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">T</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Topshop</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">The North Face</a>
                                    </div>
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Ted Baker</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_u tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">U</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_v tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">V</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Valentino</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tf_filter_w tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">W</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_x tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">X</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_y tf-filter-item tf-tab-content is-disable">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">Y</h4>
                                </div>
                                <div class="tf-content-brands"></div>
                            </div>
                    </div>
                    <div class="tf_filter_z tf-filter-item tf-tab-content">
                            <div class="tf-filter-item-inner">
                                <div class="tf-titles-filter">
                                    <h4 class="tf-font-normal">Z</h4>
                                </div>
                                <div class="tf-content-brands">
                                    <div class="tf-item-inner">
                                        <a href="shop-default.html">Zara</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

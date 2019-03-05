<?php
function format_money($number){
                                $n = $number;
                                $n = number_format($number, 0);
                                return str_replace(",", " ", $n);
                            }
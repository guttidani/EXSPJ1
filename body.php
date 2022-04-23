<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>


<div class="container-l">
    <div class="row">
        <div class="col mid">
            <h2>Responsive Table with RWD-Table-Patterns</h2>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
                                <caption class="text-center">An example of a responsive table based on RWD-Table-Patterns' <a href="http://gergeo.se/RWD-Table-Patterns/" target="_blank"> solution</a>:</caption>
                                <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th data-priority="1">Languages</th>
                                        <th data-priority="2">Population</th>
                                        <th data-priority="3">Median Age</th>
                                        <th data-priority="4">Area (Km²)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Argentina</td>
                                        <td>Spanish (official), English, Italian, German, French</td>
                                        <td>41,803,125</td>
                                        <td>31.3</td>
                                        <td>2,780,387</td>
                                    </tr>
                                    <tr>
                                        <td>Australia</td>
                                        <td>English 79%, native and other languages</td>
                                        <td>23,630,169</td>
                                        <td>37.3</td>
                                        <td>7,739,983</td>
                                    </tr>
                                    <tr>
                                        <td>Greece</td>
                                        <td>Greek 99% (official), English, French</td>
                                        <td>11,128,404</td>
                                        <td>43.2</td>
                                        <td>131,956</td>
                                    </tr>
                                    <tr>
                                        <td>Luxembourg</td>
                                        <td>Luxermbourgish (national) French, German (both administrative)</td>
                                        <td>536,761</td>
                                        <td>39.1</td>
                                        <td>2,586</td>
                                    </tr>
                                    <tr>
                                        <td>Russia</td>
                                        <td>Russian, others</td>
                                        <td>142,467,651</td>
                                        <td>38.4</td>
                                        <td>17,076,310</td>
                                    </tr>
                                    <tr>
                                        <td>Sweden</td>
                                        <td>Swedish, small Sami- and Finnish-speaking minorities</td>
                                        <td>9,631,261</td>
                                        <td>41.1</td>
                                        <td>449,954</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center">Data retrieved from <a href="http://www.infoplease.com/ipa/A0855611.html" target="_blank">infoplease</a> and <a href="http://www.worldometers.info/world-population/population-by-country/" target="_blank">worldometers</a>.</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--end of .table-responsive-->
                    </div>
                </div>
            </div>

            <p class="p">Demo by George Martsoukos. <a href="http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions" target="_blank">See article</a>.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
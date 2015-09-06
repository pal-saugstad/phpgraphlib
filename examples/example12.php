<?php
include('../phpgraphlib.php');

$set = array (
	1910 => 800, 1911 => 843, 1912 => 888, 1913 => 936, 1914 => 987,
	1915 => 1040, 1916 => 1096, 1917 => 1156, 1918 => 1218, 1919 => 1284,
	1920 => 1353, 1921 => 1426, 1922 => 1503, 1923 => 1584, 1924 => 1670,
	1925 => 1760, 1926 => 1855, 1927 => 1956, 1928 => 2061, 1929 => 2173,
	1930 => 2290, 1931 => 2414, 1932 => 2544, 1933 => 2681, 1934 => 2826,
	1935 => 2979, 1936 => 3140, 1937 => 3309, 1938 => 3488, 1939 => 3676,
	1940 => 3875, 1941 => 4084, 1942 => 4305, 1943 => 4537, 1944 => 4782,
	1945 => 5040, 1946 => 5313, 1947 => 5600, 1948 => 5902, 1949 => 6221,
	1950 => 6557
);

$graph = new PHPGraphLib(600, 400);
$graph->setLogarithmic(true);

$graph->addData($set);
$graph->setTitleLocation('left');
$graph->setTitle("5.4 percent interest increase per year");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(false);
$graph->setLineColor('blue');
$graph->setDataValues(false);
$graph->setXValuesinterval(5);
$graph->setDataValueColor('blue');
$graph->setLegend(true);
$graph->setLegendTitle("EUR");
$graph->createGraph();

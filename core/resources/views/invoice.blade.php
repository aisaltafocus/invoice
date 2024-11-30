<!DOCTYPE html>
<html lang="en">

<head>
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @page {
            margin: 0rem 0rem;
        }

        .bold {
            font-weight: 700 !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            padding: 0;
            margin: 0;
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important;
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .border-0 {
            border: none !important;
        }

        .testing {
            background-color: salmon;
        }

        table {
            border-collapse: collapse;
        }

        .block {
            display: block !important;
        }

        .list-style-none {
            list-style: none !important;
        }

        .py {
            padding-top: .2rem !important;
            padding-bottom: .2rem !important;
        }

        .header {
            position: relative;
            height: 100px;
            padding: 20px 2rem;
        }

        .header .col-left {
            float: left;
        }

        .header .col-right {
            float: right;
            text-align: right;
        }

        .header .col-right .title {
            padding-bottom: 0.2rem;
        }

        .header .col-right .company {
            font-size: 18px;
        }

        .header .col-right .location {
            padding-bottom: 0.2rem;
        }

        .header .col-right p {
            color: #313131;
        }

        .sub-header {
            position: relative;
            height: 80px;
            padding: 10px 2rem;
            background: rgba(0, 0, 0, 0.05);
        }

        .sub-header .col-left {
            float: left;
            text-align: left;
            width: 400px;
            font-size: 15px;
        }

        .sub-header .col-left .title {
            padding-bottom: 0.2rem;
        }

        .sub-header .col-left p {
            padding-top: 0.1rem;
            padding-bottom: 0.1rem;
        }

        .sub-header .col-right {
            float: right;
            text-align: right;
        }

        .sub-header .col-right table th,
        .sub-header .col-right table td {
            padding: 0;
        }

        .sub-header .col-right .title {
            padding-bottom: 0.3rem;
            padding-right: 3rem;
        }

        .content {
            padding: 0 2rem;
            padding-top: 1rem;
        }

        .content .table thead {
            border-top: 2px solid #dee2e6;
            border-bottom: 2px solid #dee2e6;
        }

        .content .table tfoot .top {
            padding-top: 1rem;
        }

        .content .table td {
            border-bottom: 2px solid #dee2e6;
        }

        .content .table>thead>tr>th,
        .content .table>thead>tr>td,
        .content .table>tbody>tr>th,
        .content .table>tbody>tr>td,
        .content .table>tfoot>tr>th,
        .content .table>tfoot>tr>td {
            padding: 5px;
        }

        .amount {
            position: relative;
            height: 50px;
            padding: 0 2rem;
        }

        .amount .col-left {
            float: left;
            min-width: 200px;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-align: center;
        }

        .amount .col-right {
            float: right;
            min-width: 200px;
            font-size: 15px;
            padding: 0.5rem 1rem;
            background: rgba(0, 0, 0, 0.07);
            border-radius: 0.5rem;
        }

        .amount .col-right .title {
            padding-bottom: 0.5rem;
        }

        .footer {
            position: relative;
            padding: 0rem 3rem 0 1rem;
        }

        .sub-footer {
            position: relative;
            padding-left: 3rem;
        }

        .sub-footer .box {
            width: 300px;
            text-align: center;
        }

        .sub-footer .box .title {
            margin-bottom: 0.5rem;
        }

        .sub-footer .box hr {
            margin: 0;
            padding: 0;
            margin-top: 1.5rem;
        }
    </style>
    <style type="text/css" media="screen">
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #3b3b3b;
        }

        body {
            font-weight: 400;
            text-align: left;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        th {
            text-align: inherit;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            font-size: 10px;
        }

        .table.table-items td {
            border-top: 1px solid #dee2e6;
        }

        .dashed {
            list-style: none;
        }

        .dashed::before {
            content: "- ";
        }

        .outer-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .download-wrapper {
            width: 900px;
            padding: 10px 0;
            box-sizing: border-box;
        }

        .download-wrapper .btn {
            background: #10f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration-line: none;
        }

        .wrapper {
            width: 900px;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="col-left">
            <img class="img-fluid" src="data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAV4AAADICAYAAACgY4nwAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAgAElEQVR4nOy9e3Qc13Wn++1T1c1Wq9VuwRAEtWAYgmGKomhapihZkWX5/cq1HTszUuLM+JnEz3EyM/dmPLmeWeGsWRlPoskkjiQ7kWWPb5LJeFl2kpt42Y6vR1H8UBxZpmWKoimapiiYohAIgmAIaja6q86+f5yqfhGPBtAASPB8azUL7EfVqapTv9q1z977iKri8Xg8no3DbHYDPB6P51zDC6/H4/FsMF54PR6PZ4PxwuvxeDwbjBdez6Ygtxw0cstB3/885yS+43s2izIwIrcczG52QzyejUZ8OJlnI5A7HzWAofp0DlVDjWEgRyDHMdQIslUksPrB50Wb3VaPZ70JN7sBnnOGISAP/DowTGCvB4oYcx/IHPBxYFo+8eP9+sHnVTezoR7PeuOF17MuyOd+4txYT8zmUQ3Ztq0fJI+QB8lhxKCASAiSBe2D2KBRn9x2sEq4bQ4J0PeN1jZ3Tzye3uNdDZ51QT73kz4gxxOz70L1eQS8FhggG4aIGIwBAax1P6jFFlWweg9QJdz2e0gwCzyg7xv17gfPlsJbvJ6eIP9z2lm40xPOws1nBhHJY7gQlQKS9DWR5NXyd/o+gCGHAmoHQPPE0YDcdrBGLjOLEfQ9270F7Dnr8RavpyfI/5zOAyHTE29B9fkYfQvCCGGQw0hIJnTiGpim6AKk/S9OllHk3qtFFgWsfhWokct8DCNV4KC+Z7vd8B30eHqIt3g9a0JuO5QHDQkz/YjkEQYQ+jCSRTAYMU2rNnm1rUCc0IoAmnzeYhW7AbkscVzGSo16PCW3HbTkCtMg6K8811vAnrMOL7yeVSF34MLD4HpglKj2C8BOQlPCmBxhCCa1cMX9Dae7FlJMYvGm3wsD57qoRS8HYL72SgBU/gKwwH9KlofXY/88nvXEC69nRcgnf5gDQiwlIIdQBpw/F0KMGMwCPtyuN9BqAeOEWAGT5PooRcAS1UYAK7cenAUs2fw04KMgPGcFXng9K2UMGIb4F1DdQ2CGECmRCZx1GwSnD6DB8gJ82iBbhwWcaVjArwVgvvbq5JefAyLgt3EW8LE176HHs8544fUsidz2cBYI0bgImieQUUSc2Apu4Cx1JSzly11zQxaxgNESEBHXtgNWbn2oBlgy508B6PtHvAXsOePwwutZjkFgAHgrzp+7HbRMJoRAnIVrWoS3Wwu3W1KBlcQCloxbhoHru/XojQBU6z8L1EA+B1SA38dZwid60xCPp3d44fW0IXc+GgKG+WeKqC0gZhSkjDAIUnDRCq1C27ECxb3X6qddCWl4mTb+WaShLRYwQGDcYJ+lH6gSn9qJEsnv/cAAEVWmAKsffaFPxvBsOl54PZ0UgBLweuBloLsR3U5oDIExzsI1NAbQGkhTLBcS38VEuCG0ydJ2LFOMLLwMEgs4CEIgpFZ/CwrM19+Cs3w/B8wAt+Ms4Mmuj4THs0544T3HkT8fd5bizNMFrBYxwSAigxguQ6UfI3ln4ZqFrVzVha3TBf29C1jI6U/T9aQpxJYaqKXRRyXJfEtdDx0rSsKAG/HALtQtBC2iWIgLgPf3es4IvPB6skAOuAF4GRpfi7KXMMgSBKGLVDDtg2fghNICceys01gTCzf5PP1+GuVgjPPTppZqp4Ubxe69epQK8QQQoZQAQ2BKrrVJlw0Dt2y4HBJBjk3ajiyKQXUvMAPRDmAOON7DY+fxrAovvOcg8tnjhspcAdUixvQhZgCRHRjSaAXTGDBbSHDBCaZ7VbBaAyYRKqR9ShlANYfYfNNabbGCG+tJLNzY1hI3xUmcS+AgzkJ1wquMAYbYDgIG02EBNyxlW3UWLieS9TyAE9xpnOvB49l0vPCeY8hnjztfKOwErsfqz0D8cgKTJzB5wiQe15j2KIXUFRCrE7kohthCrMexTJIN/pR89gA1LWLJUp1/G6qjBLILwcX5GmmuNxXeelKboR5Po0SY4HaQGc4///M8d7jC4Z8UUIWo8n4gS73+ISAkjvuApuVbjwEs9XgSqEB4C0KFYu0LAPreF/tBNc8ZgxfecwT55KEcUEQpoQwmFu7zQQYQyWKMIVggHrd18EsVrK0Ra4QyibMkD+AGrE4CszgrMws8hBvUioA+lEGs5kDziIYoTgiVk+5vOQRaBcaT9UY4Z0YqmMeT9X4H1293JO8PJjUeTiaW7gNANWlPLVnH0sfmEz82QI56PaRWKyJSo/+CacDqu0Z8QR5Pz/HCe+5QBvag+jMob0YoYUw/QeCsxlZr9LTBM3UWZRxDZGeIdRYjn8fIdwnkfv3QFQvFyt4HIH/88LVAHzX7bmAYE+9CKKBUgAiVL4A8QT73J/SfNwNU9U3lpti9/DlzyV+fA5DPHv9rAGrzHwRC1P4LICIMPg3U6LvgTgC9aWgls1hkk+PTB1wHTABfw4n+3BK/83hWhRfeLYrcciAL5AkpYRggNCMYeSFGRkDyBGQbRWxakx/SNN/WcqGKRZhCZAaRY6CTwI9wlu5yAjcDWEQeBCYxUgT6ED0GVLHyI5TpZD22TXQX3DHT+rlFk2I9qiFgsdmuJnCVO54KiaezaHUIpYDKLkSLZOQKhIuoVCooc3LroXGQCudf5OKA39PvLWDPmvHCu3UpAduBvcAvoDoAMkpgaPhbgw4/bptPl9TatahajPkWgfkHcsHdPHvkIBDpG5Z/jNf3XX4EQP6BA4Dh8LGPooxyXviXZIJp4D7955d2b1WabYnroRLhivW4Pmz1fCAk3pZlGfeC3PGUwZWbHAR+GXQQtTcjGDKSBSKsnQWOg/kirv7Dl3AWsJ8PzrNmvPBuMWTfdw2Q5bygD2EHai4DKUESj7tY1bCls8wMqn1YfS6Rljnx6DQiUzC8rGDKrYcHgCxZGUXII2YMYZBT8dVUeZp6FMknZypkMscIwwiY03eNNoQzKT8JtYfKuGiGnYAhNFcAJqmKZhHdDtSYefyVQCQfHz8MRFhzAhWr/3ZnJL/7w5BsvYyYHCbYgdE+AhkDKWEwCKblxpNFtYjlCrDP4unHK1idlf/6k3GgQtVOAui+q70F7FkxXni3HlmghMa7EN6J6gAabAeaftw218Iy9RVcLCzEdhfWDmFNhK2XEPmO3MUxvWlh61LuIn3k3wMMEsepj7cMZFG9Mfn8btyg3MdxIV9HaE90SNfzavc7+5tACDIEOKsdQO0vAmDjN+Os0juAp4HPAFZuZpa9FIDXgh1A9cOohJigHyOQSfM0DKiGqBawdoxafYxYa9j4XShHgL8EjgJfx1nAPinDs2K88G49LM1R/W+ADIJMgBRdZIHNE1HEGNB0QI3WjK92AU4/M5J1c6fpGESG2IY8/uCI/Hc9QaSzWDOt//4FVbnlwRKiOUIZQSgQBtcCF2FMP0Ieg2mmmQFWB4ACUXwDUTyHtSX5xEM1cuEUIpZ6PIZiMHI1EGJMHpdQ4X6fJk4ESbibsVkAYrsD1Qr1+h6QiKsOHEO1RGxfgJESYZCDxMJtu/kk/7T6uAVLI8JCaygRUZy+5/GsGC+8Wwzdd00NZ4XdC9wrt/14ABjD1K/Cxq8jZoRavIvQuFkejDbnQWtLltDO94pAERu9ESyoPYHqDHAXLtnhPrmZk1zDdmAA9N0o28GOYKRAxrT7lVWdYtbj3ckca3uT2g5fxSU6/D1QQ+0HgDxGtgOGbUlthkyaOtwhwNbmUc1TszejVFHtA61g5G9AB7D2X4KESFDE0OLnTteX7HsDSY+FRTVCbQWlwpFHE0v32h6cNc+5hhferU8VmMI9HueBcYQJlAGsllGbR7XgUnkTATqtvoK2WL5JSm4seVdLQZ8LtoZykisfitB4GGUINf0IRSSp19v2ormBIFlfGJjEyiwDVZSrQSMyQR+QJegojpPSmCzTAkkmHRqBHESoAt/E3YjGcREWXwbJgexAJUdshxExSNzMrlO1xNZitYJyApVpRI4gPIqLJ3b+3c/ftC4Wr/yXf+gDCsTMMGcrgNXfeYm3rrcQXni3OPqvnjeL86EeAb4mn3l4ABhm3t7AfPx/YHQEYYzAJPG8ukBBnJZaC81Zgfuw9KF6PegY6ByBLWD1FYiOguxApB8jppEJ17rO06qMJSZrFO9xDdfrUWBbmH6efL9RAN0tokSP6nUAS5Rkrknm94GqfuSFX0qPhdxxzADfol7vw9p/ierFzMe/hBBibdF9KRHeyFZRxonlLxDzI8rlvwIivemiJKph71pPzVJsB0aB/bjU5yrerbGl8MJ77lHFDWIdBnIglwHHUQaJ7SBKHqv5xkAcOKG0NimGYyvEtoYyjjCNcAh4HCfsE8A/Ao8iMg3Sj8ooliLWllDJnlZdrK3IjbYMliX/nDZJZrIXqQxZTTPcXBSDcC9IauEuNPAV4VwZBxEZd5EWFBDZCYRJlMQMIocQJoj5Ac7CTbezbsjtDxaBHEG4HeWFwHHCzMn13KZncxBtHUTwnHPI7ceGgTF0/hVo/EqMDGNk6LSKZLF14hvrCaxOI3wRI/uB/frBK08TB7n1yC6ghInfDYwSchVCiWymY/bhVGg76vKetsIOF0MUu+V85NKLY/09oEb5gtsA9E3lZQviyF1PGaDAqdlB4trbgTwqwwhHedZ5twNV/flLp5ZbT6+Q2x/cDgxyqv4BrN6Imo9w6sIvARXd56cw2kp4i9dTwVmq3wdOAZcBw87/qy4GF0JUT6BM4SzbkyAP4B6DFxO4aZzF+W3gYQIzg0gfwu5kpuCFM8xWOmuFkSkgQk1q4XZfDGdu2qUKW1vG2hHcE8AQUOOpZ3YC03LnI3OA1V+5bN2ET/74aB9QRGUvqldgzBBoCIGhUFivzXo2ES+85zj6odEp3ODbIQD5xOExlFGi6FXOz6ol0AIidxME/4jIdxi88uhi8buN9X54e2oFu8y1L5x8NdDPM6d+C9V8kuJrGrNUdCu4bVMDAYE5DtQ47/z7AatvGuxeIKN6DtiJMoTVa3E3mX6gj1gnQH5MmEkFfT0tzuSpQ96G6ssJjHW+9tBQ7F/HzXo2Cy+8nk5mcZbsPwJPAucD2aTWwrHk82WRexKL9vDhYVTznJe9FuES0MTalXaLdzmX10IzTgBYLQMRsz/9eSCSP5z6DhBBcACw+mtXNLLr5NajIdAHcR7quzFSJDQvAfoIpJS0y81aYdmN6iCnnglRnZb//v0jKDM8bccBq/uuXrUQy10nXGnOJ2aHsDqIMXsRuZxAhsGExDZCsRhxtwLPlsMLr6cN/eCOSdxgkrOAkwy05SzcRTDAVUCZev2fAcNkghIiaZpYslFdXng7adYJdll5cfRbODfDF3Duj1s4vbpYiIsWGAR+A9UCqrvdTBlp1ISA1UE0HkSJUH0zqseBLwMPA3+NG6BciwWczvpxPfBSVK8D3UloXAH6elwltjUC4wIAPVsOL7yeJdGbsC3pv8sif/BQGVcVbSdQIpAXI/Qjph+RHGLMaWUnwRVYZwEBboSfdUZDJJ+n74dBMstwvB20xnz1F4GqfOx7dwMGCXIY8oTyGowUyQSDiGQJk0G+oHX96sLqsAYhBIpYHUWpEcaDuHjgrgv7yFeS43fs8CDWDiQhfMOIvIjQbMdIX/vMzbZlBz1bES+8nmVZobU7BpRRfSewHaQM5BpxvK11IqA551ocJzNcxO1rS2eYCNOws+T99PepYGZDg5Iliq91ldXstTi3SJj86iJXBD5+h0uVDk2jRkOr8Cqt8coGIzli7UfZg2qI6HdxrpiFahAvRWptX4uq85+HQY5Aco1ZP9J7ThozLV3f7zxnGV54PT1BPvbdXUA/2fA1GBlCwhFEigQmdOFjnYLbmGvNiVxk51wmnOzHPca7vukSKlzRGgTCFpcAtAh3sj6lglLDyH0oc6D7EVwZSKGEyDAieVR3YTFEcb5h5SZGN1YtURwlKdFHEJlC5ADwE5yfe6arY/LJh0tAPzYeQRnBcDkhY0gwgpAlNCGmZTJRy8pdLp6zEi+8nl5xHfAisD+LygiCE9tMQENcWmrjYBOrslZPhDeeQYkIMl9EzAyirhhOVB8C8oSB+78ktRpS07ch4Mmca1ZngQqZzBeBChfU7kYDqBUMtloEm0Pox9ohRLLUyTcKv2ujXZZ65AoNifkbAjnGcy/6EmD1pqGV+HYHgN2JhftakD5XoMe42ZdPyxBUn592juCF19MrDgIzYEJEhlG2YykR2SJGw0bYWCpwUVxD1WI5AFQRuRf0GdycaRXS8XyR/wc0RPWlQEgU7wUM1rphJzfDscWyH4hAvgHMgx7g9DnXqm79UnBWrlyAZS9oARvvoFnVbRrhAeCfcFMYTdNF5pr80SN5oEhcHULjMYwZxcgVhGYMKBEYV3OiczJR78495/DC6+kN8/n7gf3kmQHKKG8j1lEkziGEaOBExlonvLWohmqEBPcg8gSF7J/x3OyMvnykbYYHuevEAwBM/XQKyFKLxoAQI054NUmaiPg6MM/5F/8hgL6nv3Pwy+IGxO5NBgu/wZOP9FOr3IzqJcRxGWEaY76D8GOK5k+Amr7ryukVHIUCLib3BuDnQIcAN+tHkPhxW10up8UuezfDuYIXXk+vSK3B4zgL8S6EPldljD7q8Q6cMJ0EqSHyHWAO4e9xg2DpzMKdpO/tBwyBfAoIMMHNgEHl66CWKP4mXRYmTyI1omS79yXtehJnaY8n7Z9jOQv3zqMhkKdWG8Tq9sR/fCWGEUwwjDHFtuLznQXoPecsvlaDZ12Qrxx10QTH5n8WpUwU34RqGTH3ITLLtuCPOT87AUzr25/XdZqvfO8pV0Xswaf+BwDPuvC3AKtvvfDQOuzG0m2582ge6KNW24vVtyLJHHehMYSBq8rWOq9d69RLrbSWtrQK1XqVelwjyPw6g8//K6Cib/EzXWwlvMV7jvOQuJil0sUXj4jIqKhOhNZOAXMXTU6uZWrz1Fo8jPObVnDF1NMyh5PJe10NJ8knjw4BhqD+Rhdba3YA8MQT7was3Pb43wCW7CX3Aeh7L+y5UMlnpgwQcmqqHxtvx1BGeAEiQ4RmF0b6kaQMZiDtg2d4X66niRdeD7h+MAa8CvgBLmvtJCtIEuhE3zCWTo1zOHnrvjW2cRgIie27gRDsTrchcSnDbn61GnAg2e56WIhuIlFXrP0VqO4EXo9ISCC5Rk1jkdPjlb1rwdOCF14PQGREKog8KSIvjI15mcCPnyiXTxjVo2EUnQBmnvXEE8uWWuwV8jsPuZoO5+nLcTNQvA4kJBO42YbTGSksOcAS2VcBEadOnIfqvPzOo98AIqaf2Q+gv/OSVQmx7MPQd7SIiUfBDoK9CiOXkJHdiBnASBZjTFuZy9Sd4H25nkXwwnuOc6WqBfinSy+tANMKLwVeDxxG9SjwtzQHrTZMeHEDXiHwJiAP+vOgIUGSQZFJMtqs5tzS3ghY1O5O2tkseL5KC1j24dKQoQTsBr0S9BeBPMb0tVu4pt1/6wXXswReeD0AiLUnAcSYF+JcDCVEdlqRfD2TeTHww6ly+YSoHsrE8Qlgrjg5WV1qnatqx75vJZbuee8ALkAze3CzMpiG/xSamWvp2LDLPjMIOfeefTaQJR9kccLb9U1Dbv9hHijTrwOoXofIRQSy201lFBYxkm1kmwUGkAVmyvDC61kcL7weAAYmJiaB6alLLnlMnduhBAyhOqZORB4Q1WM042FruEGyXpNYuvpWoB/VEQRDEDiLsq2YDc0BK8FNVw+5JAvMRT9kJGTl+WA5YAR0B+g73aSdjGBMkoknNNrTKbRecD1d4IXX00qEi2E9LqojiBQkiXpAdQiRAiK5ujGvAh568tJLT4rqoTCKJoDZ4uRkLwa0ZnF1cT8J5BDzOiBLFN+IECLk2ixMN9mlJdbDoBHGfBklAv6OZlnIpeNx//hYCJSIa33Y6AZE+hGuwUgfQVBGxGWcSUt4mLdwPWvAC6/Hkfh6KZdnRfWkiPQDjZneVWRAYUBdhS0rqvfiCsZUW15rFl7dd8McgPzuw58HDGLzQI443gtknfDSLAdZT6qZWY4DVXLn/SkQ6a+94MgKNuuEF0aAt4L2g1yLQKNGbhAsHIvrBdezCrzwetowqhVgSkUaPtG2p3k32GRUZAwYsCIDtUxmCnhoqlyeDKzdn4miSWCmMDW1FiGu4bZ1NxAixlnCkb4OMGi0HbAEwdeACOz/h7NsJ1jOwr1rwlUr++lckVPz1yOUQF6CoUgm2IVIjsAYJKmG5gfPPD3GC6+nDXGW6yxQU9pFNyEtEjuUjGvtUJHUAj6BK5mYRhSsWnj1312eZrM9ACCfnTkKwMxPSkAGawuA5fxtfwlY/cDz717B6g3Oj9sHvAJlANE3g5hGGcswdDvt43E964AXXk87TljS5If2jxb4f1LC1uAs4LINgtJ8EMyo6vdOlcvTIdyXcX7j6cLJk2uxgFML/MvJ8rvJ8vBCbT2t7XdgiI/m0flrcTP6vgahQMbsQSRPIKGzcIN2we305Xo8PcALr6eTBUVsAcs3xSQCXFYRUh+wwgCqJ2k++s+yFgv4XaXkt6X7V7mK1MrdjXIxqr8IEmLEFbLJLBCP6xMgPOuEF15P1ywnQS11zo2K7FQYiWEghllV/f6pcnkmsPZeY+0MMFHqTRTE4u35oyMhMIy1BeL4JoQ8odwAkiM0zRktRFxthYXicT2edcALr2dNLGQBJ8syIqjqaDKvQj/O5TCefGeK9amn0NmWfvfSNwNZkB0uWiGxcDsTMrwv17MBeOH1rIpuZCkJQwM3Z+9OhZoNgr44CCpG5B+eHBqaDaz9hlGdBU4UH3+86/KQS2731kNZ3NTpBUR/FSHHtnAYEdOwcNNJNL3gejYBL7yenrKYBawigwJY1SEAhby4CIijuIpfEyxcCH01GGA7UAR9PQgEJnva4Bl4wfVsCl54PT1hMdlK/b7NWdldJpzCTiCKRfpikaqF+ycvvfRUYO1fGNU54OSFExMrSvWVjx8MgVcj5AnklxHJks24aIVMh2vhzBdcg1rD3FNJgy/c3NZ4eooXXs+6kMpZayxwKwqDybKcLIu4kLFv4frlsokQC5BaugVgLwBhYBau8XDGCm4TVUN93iz/Rc/Zhhdez7qyWOxvqiaaWMAC2xWsNeajMdRE9benLrlkFjjS34XvV25/pJ9gWx5bfRsiWbaFpmHhnn3hYWESIR0yX83SPFyeLYIXXs+G0IUF3C+AdTP0WuDTON/vsjUX5PZHXAqws3R3AU3BPSvDwxTAoGqwcVoT2LOF8MLr2VC6sICzuPf+hRWp4mYXXnoKovmfAuxEJM+2IJcMpiUbOKss3e7CRTxnPV54PZvCYhawJH3Swg5clMPyfVStAfpA8kgYnrW1FVoyUDxbG/8I49lUpONlmssBgYEgigozF15YWHIlRsBIiEnqLaQ+3c4CN2c6SeGLBDewaNW9PFsKb/F6zjgSmcwJWHF+3qX7aZKk0Sa6Z4nWLovX3C2Jt3g9Zyo5hXw9CPLVXC4/ccklW7uvqjZfVqtYnUN1lgsumOGCC9Y7tdqzwXiL13NGoknfVAityLnRTxUnvGBRjRCpcfHFNVYez+w5wzk3OrTnjGexguuiaozq1uunqs1l+ooiiGKwehCVo1g9AUT6Bi+8W42t16E9W4J0gF9cPOtmN6e3tIouNAfV0oE0VzRoEqXqRXdr4oXX04ZRNUAYp7MLbxZJJMI2kUJgTK+K52werTePpi/XvaIYrIUoPk4cT4F8kVC+BZzctPZ61hUvvJ4zGuNKlW+tfppauK0CHFuwtorVGUQneJaMs/71ij2bxNbq0J41k84ivNntSBGRUNzgmuFsHGRSbRdZBeLUwrU1Yhuh3I9yGDV/h7UHEU4CVX377rNvfz1d4YXXsxhnivieUTeCNdFp5VoL1lqQGVQeQ+UYM+ERINJfv9KL7hbGC6+nDTUmBLJsto/3bKUtWiFZWutcCbGFyFpUj2D1GEa+SSbYj+UkkU7hJgSNdJ8X3a2OF17PQnjR7QnaHi5mrcVaUBJfroyT23YYmNZ3jC5dCMizpfDC62kjdn0iKy19I62j4FmA00LDWgbLYpv4c5kg1glEvkUQfhu1x7HxCVzVtQq9m/LIc5bghdfTRjo9O3ixXTGd0QoNXy4RVisY+SeC4DgE4/r+K3yo2DmMF15PG+rieLMGjIh48e2kMx7XtohsbNPMszlinQXuR+XvEQ6TlYOIVHBWrrdwz3G88Ho6MR1LTzdomz/XYjUCmQWZQOQk77v8hJ6N4XCedcELr8fTDamla9NoBZtmm4HViMjWUA6i8i1EHmRbcC/KHDWdBWpedD2teOH1eLpFW/5o9ee61F8LUkV5CpFJBi9wBW7eVPbZZ57T8MLr6cSSDgmx+OSUW57OeFxrkwpiiaVbjyzKOJb7EfkBQfBVYIZIJ3GpvjV9U9lbuZ4F8cLr8SxLaxWxVl8uESoVYIYwnADm9P1js5vYUM9ZghdeTxvGWbo1afFJpk/Ym2H5RtZaq2oBzlvPDXXG46bRCnHs/q7HoDpNxFGEA5jwiwiT2PgoLkqhup7N82wtvPB6PJ1ox99NC9eiWgOpIGYamNEP7/AWrmfFeOH1tBGoVoFZFaluavnxxPKMRWZjkVl6HRXQFo9L04cbJ8t67OY+i+0kcAQx/ws4AfodnIXrp+TxrBovvJ5OLGeQoKibaXhj29OY+0wtzs1RQ5gD5vTDV3oL17NmvPB62lBnzT2tLvZ086Iakhko1Birvcz0avXhgvPhqkItcoNl9bgCnAD5AsKjnLftr0Aj5uMKZ9ANyXN244XX08m5Iy6tc56l/3d/W4R5oErxvApg9aYhn+br6RleeD1txK4m7Li4mgJtnJUxvZ3RCq0+XFWYjyJgCtWvIYyTCz8NVJm3UzjBPXduRJ4NwwuvZzG2vuC0jx5alDpGakCkH9rpLVzPuuGF19NGqHoCqMXwUlW1Kt8GsU0AACAASURBVGI2M4531aSNjq37O4pafbkVIr0f4SS54PeACtXoMIC+5/Ktf8PxbDpeeD3LYTnrK5W1mbZ2gVek/2qXF1zPhuGF19PGhRMTk8DkE5de+l1gTGHUwlCn8p6x1q8m/9Qj93e9Ea0wDkwRyC3ArH74yq9tajs95zRnuSXjWUei5HX2WYLa9ke6HzWaSQ9n3z55thTe4vUsSKZe/zJwfxyGH1KRf25F8ri52NrmYOtcbiqpDxcssZ0D5lD5ODDL2K7PAOgb8GUaPZuOt3g9i5FahjXchIxtKbKbmk68NGm7KzTbXWv5zOPZdLzF61mQ0uTkBDAxMzDw28CnojB8p4q8EpEhoM/QtHwXsnY31AKu1dO/LMYcAWYZOP/tQKTv2HFsI5vi8XSDt3g9y2FxPtIKLrkinZL8TLWA0/Z5X67njMVbvJ4lSS1fRP4jYKYvueQ6RLbH8HMKu0WkHyhsqgVcjyyuHm4FybwbZ+keXc9NejxrwQuvZ6WkRb9ngCkgi7Msc7gnqBB6mF6sXdvSVZrWuc8685zRiHbfsT2eJiIhYJ4aHLxRRUasMW9V2CEwCORbrd+FrODFRDn1DURJv9Q4fjHWTgPHLpqcXNR1IPseygLovit91ILnjMdbvJ614h7xYRqYwFnANSBPbyxg76f1bDm8xevpDU0L+JWIDMcib1MYS3zAuXQUN10uZgG3WrwKWNWrVXUaGB98/HEvwp4tgbd4Pb2miot+mMT5fQHyCgWBUFsiac6IpAuPZxPwwuvpDaoRwIVwDwAifwGY6YsvfjMiQ7ExbweGRKQEhJ0W8GKIqhFrfdijZ0vhhdezXqRugTlgRmA8mcKnDGQViixhAbeVohRvG3u2Fl54PetDYgH3wZcBuOiizwFmKpO5WWHQirwdGFCRIi0W8Gm+X5FQRLIb1WyPZyPwwuvZKFILeAbX744lfw/hLOCSgNHT+2Q2eXk8WwYf1eDZFKaf/ewCYDSbvRnos8a8GyghMoATYAACa39B3GDd1/tOnvSJEZ4tgbd4PZtFagFP43y/h3F+3yquX/YDRkWK3jjwbDW8xes5M3B+XPPk4ODNQKFuzIeBAvBVXELG/zn42GPVzWyix9MrvMXrOZOwuPoPFYFD6rLf5oAoiCKDiEHVJ1F4znq8xes5MxkczAHmMZGbgdwFc3N/Vpybq6HqazF4znq8xes5U0kt20lcVMPZOf+bx7MA3uL1eDyeDcanYno8Hs8G44XX4/F4NhgvvB6Px7PBeOH1eDyeDcYLr8fj8WwwXng9Ho9ng/HC6/F4PBuMF16Px+PZYLzwejwezwbjhdfj8Xg2GC+8Ho/Hs8F44fV4PJ4NZlOqk8nH9ueAIqHJEpo8iptW1lJh3swAkf6HXasuei0f298HFAglixFDHNukjuukfmTvXG/2YsHtDgGGXJgDwATuA03ub2aZ2XLF2GTZ/UZVwcbuVZsHpcLJ4gSA/uHYotW85L8dCIEQsUXclDtuNt9Ya9Q1Amb0N6/q2bGSTzyUBQw10w+489LVjT85JqbLY2ItoFA/ZQDLqeokYPU/XHfavshth0OggBJiteTe7OLgi1gkWPo7ChBHaFQDM0fuijl9b3fV1eS2w0UgT2RzqGYxZumZllfTbwDqNQMK89UIVyzruP7mXisf+77rv4Eddl9M9jWKpwCr//fVMyvb0NLIvnsM2/IFRAYxBoLATZYaRRWgqv/+mtO2Jx9/JOm/tQLYYrLzXRwAsZD09W5mr7axu8bimkEtRNE0No6AWf3NF6+6Wt5mlYUsANuBEjDc8v44cAg3x9ZaZhsYSV4lIJesKwLuwRXWXi/24I7pYMf7tmO5GN1+r5PWDnccV0zcLrOeLO487AB2tbw/k7wO09tjVUi2uQc3xU+O7p64VnpMTMuyBnwHd+6PLvDdEDfZZgHY2fJeN23qpj1zuL58DDgmd0CX4lvG9aFB3LHqpj2ty25J97WSLMeTdRSS/7+6Yxv34Y5lz4RX9t2TCuZAx/ZmgQng5CLbS/vvKDCW/L/bc9e6XA7TsXwAd16rrEGjNlx45S4M28JBVG8kkAsJpdyweJVLCWwOd5FMrXojGVMGdhHIJQhFJJhFqaFyQPZxQvetU13XTLATyBLI8xEMQXJH1WR7sszsCdLoE923TwFjDbHaZHs5SnP34i6QxQm0HxjDmN3ANYg4i9zYWQxzQE1uPXoSiPTDY6ueZFJu/UE/kMPKDUA/Ic8HyWO6nTk4ORTS5TExGGehCKAVtoXHcRdIQ3jltgdzuBtOEeVGRM4jNGVnAWkXFq8Cy5xLBdAqqlVs/CiVB4+DHJX/dt5RINL/63mNYypfOeq2+aNndqCUMcFORJ5DSBEk5y75Jcq3rqbfuEa6YxXJbLL6zwOQzSXCe+olbv0A1AjMSdzN7MDKtrMEuRDAEJh+RH4GEQjEYJnEBA/j+vGh9Oty6w8LQBHiMdBdiFyCMYOIht2Z/Op2SLrUANPSH1RAzQzIFO4mtWo2VHjlLgwQEpgx1P4qgRQIpL8pvHoUdBT4Cu7OsjpCsxN4DaLbEQbATKFUUPO3wEHZB+sivoF5FZAnkOugRXi7ZhVNcscNVC0GCxQ5r/bnuAtk8dkahGHgdQjXYeTGhvAiVdAqyJM07+5rmd13BOhD9d8AOzCaRwibtu5yx2ilWpK8DIDMEJrv4/bhOy3fKgJvBC4BfT8AAe6xe9nHT+1YLtWOxndPuhd/iivs3nlMU6vv5cBrQPcAwwTiDs+y3WiVXTltn2ESFQt8BKgRZPoAg1Z/qdE6qIF5GHcT++rqNrgA2wK3BTXDwC+5fogBOYYx97rtck/LL/qA7Yj+HGrfgZgsRnPOdZCI6pKkHWSFpM84xpxE9VHWok9stMU79XABGCKQITAFAskRpn5QILZFlFGgLHc+XAAi/ZXLV27Oh+nBTzoukhxr4x7i1ovAtG8/XMYP2Eprf1lRv1CwiWBE6QW4uDEpdxxxvjFjBoEdBKafwCTWroDEoVuBXIrUduAek0+upEUA8skHQ8Cgsge4jEzi282Exl0k0IWirJxUTOI4+X9TlOQPDobAAIYyhmsQKRIGzq+7knO1kraogrF5xA6gXAGnbgAOAkca3/tRtezaZS4HRgiDAmJwwrsOxyhFkmNkTHufM4kspMZe88lt/TDJHcaIu44E16/Tpt561BltGo8Ar8LIDkyQJTAhQbB+/SndaWudsFttuaGuno0VXhuVgL0EcgUi/YQBZDPuM1WoR/3EtoRwEDe99+p8vZnUnEpOppDcrcR5lteLMNluJrmI033rlrTfrOS8qrpOEcXu5Rqw1C/cgJIxI6jeQBjkyIZN4TUSIoSojhHbG3DHf8XCi/PhhsAbgOvIBn0YkyUTdj+wsRpSsUuF18atn2aB7SAjoG9EBHIZdyMI1lF4o7iExCViewM27sNZu03hjXUHsIfAXIfhKjKhu2mbdRbeemogRO1iEmwDtCm86U2p/Vj2lsDghNe47Vnt9JyEQA7V3aDvIQjyZMMcQTIYt579CZrtsau0mDvYWOGN4hJwNYEZJTTNjpkiAoExKANU46twfrnp1W9wHTvtQtiWuyNAnPonF/tB8sFC0Q6qLed3iROtQNxyJ1ZYysPAM1X3qBbIcxDJgYbN30l6DiCyg6i+EDgof3ogBKy+fXf3z7TP2H6gSEZKCHkU4yJXNLkfrpP5ZLV92YpoCGxH5FJn5RtzWrRE2h+7OfYL0mHNSyImgYJqCZERkH65/bEccRDprw1Gzh2ml2OkRCDNm2Brm3Q1bVmEdDWpiKhdfNWyyN89p3PlHf+3tQIwiJGLgTzGuGiP9Gl2vSafTl1Gqeh2atYq2TDhlX0YnqUDoK9GKDYGCdU2LSAjhsAYrA4R2Vfg7NSDq9hayyLx/XTlK1sj6cWeCq5ZRnjTu3Q6JpD+P73QUgFf6kSrOuGNbYuFsITwWlsGrseYMQz5RkdKO1hq/cU6gtKP8E2cpVhjJc7EmGFgkFCdAKeGQqzN87EepBfHQuNMQg64GqGPMDBO4FqEN70xtPtnV7b9tC+n/S0VXnfrGkBsCaSMm7q+KvuwXKjDwF5M8hSYun7Sc9PDC75tlxpPBYusW1qvo40gfUKVBfqIloAdGMqIFNrOnfb4+LTSeiO3tsMgWj0bIrzyn/dnCSgSkcMwg0iVWGugbtRQtIBIv/OHCaj2I7oTkYflTx7LAZG+49K1DPBsDLE9CeSJ5BhgIOnYi93MTTKwIHYwedPFT6pGKBGxukf89BFvoROeCnRsLbFa0MkkAmBhkYzjLPAshCpijmET4VYKYAu4PpFFJJdYXZcyG+7AjeJ2H2liNQIiLCcR8kQ2GULSpjCtB9Y2BR6dxeosaVicGAMUEHGDMQhtNzklwuoMaITVyoqsTHeTNwgGkQIiRYwYjJh0IB0wiRtnG9XZHGZbxCCGWrANNIdI2BA7m9xMnfBOA1Ws1kDtmi/8hsXbOFZTSZz7mTuLs4pzkUGu6ZJT0CRkz9rI9bkei68FSA0bhVifJNZZ1nisNsjijbPAAJHkMEy5JssJrBpEsghlRPoQnNVrZcCFgXGAxDJgbSPrG0MtHgeyKG5gKVqkE6RGVggIWcQU3LtBDrCJ8M4R6SHn+667k7zYqW76eS3wKCZecCp02Ydhm80l1kMFOIiKE/ZAylgZwkgBI1mEHIHksIwSc1Xy/RUIr42AGpEccyIfu7CnbhMhVktq6Tp/dwVrnWiBcy1AESOFhmWaWpT1GJQa1k6gWiWyE4nlu/wF1rRus4hkMVJGJE9gQkJjGhEjgkHIopqjfipPxtTIUSMyWdA8YsJGm5xv2DrxZRJlmjieRbW22oH500gtxMjOJOvbbOG1LB7bnQWKziBIv21BmcEyTmwrRHHF7VMPxTc9InGSSBHZSWKd5uwQXmq4i/YI8MWW910YjciLEJyVAH0IBiNZkDJPP30VLing2Aa1dS18E7dPD3X9C6EAOgKEWNsHgFIFpjDyl8npXclNZ5yl3QLjwN+SDlakGHk+YrYDu1B2Nh6R0WGsvQY4Jnd874i+9+puO9wEbnD0b+kuCWA9qOH6zsK+F02tSuZwsalTwN/hjvccq0tkCUEGEfNclJ1Edg+BcQOWKak7J42CEZo+XHcjSK3a+xE5geoPcGFoNdbHAEkHsDdbeBenMXjW4gJyFu84IvcgPMlaYv+75yDNBIpVsyHCq//xmhqu40yyQPC1fObI63GZQ2WQPkRCAhNiGSK21+E6xBkvvPqRq7620t/IZw73g94E5IjtGGBRKsAEr7j8zwCrY7252Fzs8jVHWSCLS/7HsauAq7BRHtWdSSA7aDyCaIHkpiJ3fI9uxFc/uicNMD/ci7b3lhZ/YKwAsyh3A4/q+6+4c61rl0+fHADK1OfehsY7gRxi3CBmqh9h2B5JIS3tco+1FmO+RRj+PXC/vmdsNZElW4c2f3PqHlIQjhLKVwjNuL5vx5qSGjaSdRVe+f0jiVUV5cGWMQEELaFOQQCZDISZAcROo5Scn7fxLDGI6DXAuNx1wg1P3DR05t6VV0Pr6Lsmpk+6h2uI5+hEbjnQBwwSBIYgDBsWbZobnw3LhGSJrHMTSIu/0ohBZYh6fhR381w2ZVQ+dqAfyJNnCEOejNm4kkwK1BKf7dORyxT76J6J0/zKqhYlAqYx4T/SuyM+B0yg+ghwCNUhrA4v+wTcfEpO/dI/xj0lrmea+xlClwN5rcfQ+dX7iWUnddsnH39osGeDbBJYEEsg0xgiYFI/tGOJUeuVsd4Wb4h7zBzA5egvjIT9ZHSaOB5sOPzFgNVB5/vie8m6FvRdntW0hT1py8AQ8GRPt9QH7CYdPOtETEhgstgI0FrirzQYW8RKEeQyVLbjHrG6ydUfxNXKuAG4qGd7sTLSfPoa0BReoWVQTasg01w4sHyadZfoL5crQEU+cegYcMAV4bHDywpCM5piBpEpVI/pe8bOwCeGdWC5BIjOBKM0YkRlACsvQLkUeKqHLUrddUdxN74ZlgwXWhnrK7xmvgTc6AbPeBliXbB2isSgEcRSQEwJ6G/LarI2i5Ei8Bye/Olu4AQMba1HrvRilM6e1Rvk1kMFoI8Me1D9ZwQaElrjOm4ayhdBbEJqxoCOusE1MW0xqLGOovFLcL7b5R/pcjgL28iLgGFkmQpbPUUBC8Ic2/guzSIwLV9RSAcyBUsx46IweoklAioYoq6tMHdDiECrbDUjYyGqF7hlCElsKSz4bKSJ311rzmVj0oy7MqrXEkoVCao9G1xz5wDUTqNaw+q35Q8OTAP36L/eveYiQets8WoJeBkwjMjPulCitC8lsXqoe8SOk1CyNCjaRThkMZJNHtV24S6MrSW8Ka3+v96GxOSBYQzXoPw8RpuFPxq57ZJY3jZJ15TmKxBcZFw8gmoW+HZXW81QAgZRrsJlizW3ta40Y7eAGQIGWOxRvRG1oBGXnNf7pykXUldFiVyBleUs3uRaUK2BrtdA2pnFfFKP5/y5lkHGBVB1NzHVptVpxAmv1TJCMibRo3Y1Ij5SjdIyzs32AD2ozrYuwit3PmKAPIEZQHUPRkqNVNFG4ZgWn05r0HlzLe6uFgRg7RB1+1JUp+Xmux7Qz9+09S2BnqGDwA0EwRgG00ixhPbHu0bQv7Rbpg1fcNzvKorJsHzyh8PAlH7gitMtyZS0XkWadpoJTk9WWA8a9RG6rIGc8vR6tKVl2fX+avtvPQ4TuPKaNpoAWyUwIbENm1X1WkW3FxZvsg6TuD5r0RhWywRmWD71oxowqb/6/FXfGNfL4g2BPEb6sboLY8xpwtt5bBa6PtL0VatllBCV761Te7cy/cDPYMwIGUOb8HbSeg6kRZANIFJCKAHPwZUaqrDQI3xK0CG8YafwrpOy2A7h7ca9ocAz69AW7Viu+IeeBtkLZoHjVKefQLVGbHEFctIY6V4/TSXnIEiEN4pHk8zOIdzg5zRreCJZH+GtnioC12NkF4HJnp7+SPug0mmZXR13MCGPYQC4jFfs2iGf/OGkfuCK7mP2GiP06x29f+Ygn/5xDigRyDCqOzAUG8H5aTC4bbGuFsqua7d+XV0DS1o8Z46VZbK5DaVplz2q8rTgdhSIovaBysVI9++C3jelYW23asKyu5w+eZxB4iupD2Ad3ES52eY23HW6GImrQQ6A/DmWndSiPQSSxZhsQ3h70cTOvp8mdjkLpJ+aLePCW8+wQuiqBeBqkFGMaaZBtl708RLegjTMqZmPnUfIg5QRGaWZkNElPTohZxc5oB8jZayO4NJVaaTHujRj982FBDC1ItJzQfK3tSNJNtd9K2pNOmIftZz/9civT7tV1FKHYDkEOL+3zWisF9Kste4N2TOyr65To7YljxqmkG5mQeNI31uOgEj+4KdHwPwNcRQR6w5iARNn28Yl1kL687TiWdDhsop5dpKGvibt7Knwyl1PuMyd0PQTx9cDfUkBGEsUR4gcJch8GasWa2sL90QBIwUCU0Dj3cTxXlRNYgGPYONX0DGjwBItSu/WyTQzUmD8ZAGYg/LW9hNX5weAGzFcgRF3nmMLyHEkOIiYKYw9sWg9grRyl8bXEdudQBEhn6R35xEZlk8dGwBm9VdHl7jzp084sRs4CsMvI2aKWjSBtbWuhHHFKEmdjFPYaD8LhQGls02I5IA8D54sATV2l9eUkdRGIK7+tEgRQzNOezHSJz1LAaUfJC+fPe7i1981snn9tSFmwSUs5V5aDc+6KAcMUK/3uRICLKfx08AhkCrCQ0AJy7Mx6upMtw1SrwJtDOwPYySP6l6UZD4+QDXE6pp1cz0s3ixCCWG3q0OAGzmOtYYx45Qu+l9ERFSk4i6OVjdJ4JqUne8jqA9SmTPE0V5ErKvhoINY3QN8v6uWNAfSQ1QNaI4oPntqP6wFN3njixAZTiaWTAumTyDhtwnCI5xXPEAcu8fyTnI5QzYL0+MhNhokkCwuQmIAoQ+RNE536bmnUp1JXQ25/LfJ5Y9SCw4TSYVarbdW7zzJ+p52/e6ZJ9P55xZAAM0COU7Vi/RaVIQ80O9uWF2oQVN08smMEGlN457Fj64KSUK8VPpYqsr+ajAmC/RjTBFs09WwyOHSf33FLDArdzEOfIvHDg8Q1wcIbJbA9qBtgdt4XvYSyEXM2+0N4QVQNeiZJrxTTxaBa0F3JYVITBKXOI1yP1b305xQbynhmwUmie0YymHcANEASnLiZVT+6JERYFrff9nsomtJfTWGEIPF8jpqlWGC4G757PETZPvmyBQjLN09BqZjUs/QYlQB86fcxf7UkxXi2Oq+kU0TdbnzMSeQRoZRuxeXgu0SBazOIvYwAXcjTOPCYxbDibXa77m7PK90govBSIjqFdSqs8DduPO1OKl7A2A+ngM7g8oUBBuRkdW8KbRlPQnNfWGA6NS7QR6XOx/5EkFY46LnzBIDp7rYQpqSUqkYKpWQaLaM1kcx8gpgJ0ZKbqbgZYzWZnnUAmgW1ddw6lQfJrNf7jxxklypyraC7bq/dstj4xZr0d8YWfg8OnefIY73AhX51MOvB4k4f/gBROD8bRHK0sfK4G4jaiGeh8pcjspcCaJRiN+EyGjjsR5oPCktTTrxZhWSwlS9IheUEYmYt7V2w6A3g3i9FV5r3SSCwmUYSUscgjKH6kFUH9abntWNb3YWQD7x1HFgPCkwMoDLgisickny/ypLXvTpYwMGxGD1KpRh0BO4kzbJ6hzknSc4vaKqyWebaU0n5fPETWbZPMc1J7x6gmJ4AIj0puKy7ZTboqPJOnYnfc4NVCrDqFaA/UuuoM3iBeq2grVzYGf1ly9cR+EdSJZjp7elfeDEoNpHpK/FDZjcz+qfiLLJawx4CcIuXAx79/5HV4s2h5EcsV6FyzicxVm96bLXpP13EeFNLF50DKiA7MUdo7R+ykqvIVeeE4ZRdoC+FpF8UpSJRl3oJdCb0jbvmGMdUqrlr8engCxP1zv6QW983T0TXrkHA/Rh7Wsw4ny7qpbYVkFOYIKvsNLqQcIx4P9F9XWojgGJr1fHiCuvBb6Oy6RqJ81KSkdi06QA7CCqfdj4ncxHM5x6rII+Zru8u55O+pt63f2di29HtSa/++R+/XddV/HqLbWf9uOyBV/g6s5ikjTscZC7UX7AilKvgxPAHBq/BGUHgfQhkgc7BlpCgv8td04eASr6KwNLi1VrJMWmkPaLBMH1DSVLRoZAS8TVjxAT8ZMfVlpSeJcmfbKCtL5FH0YGMaYfY0zL5yT1IVztW2OhgKWi7v30e0HjpjCC1X5s1Ef09AxPP11jltX319MOR3KJaG0W1MotT/4b/Y2raxiNQI0rWt9yw8iEzm6N7c+BWmaPXw3AU0npzOWOVZsbQbLJU3GJIOhHJCQ0SXlTTQdeG+dK/uv+MrCDkO0YXuQyKk37etdES/ikANsyQwQmj8ig87uncqKWbmcoXoJeWryuoArsIi1WrFhXvJn/v73zD5LjuO775/XMzu0tD8fj8Xg6kQiKoiAaBAmKVmRKpkkCimWVJcux41iquJxEcUVmbCmqJGIUkaKYQHKJpkzZLvpnKf5ddqossfKjIskVl10BTFI07ZCUBAIgiAIh+HQCT6fj8nhcLvdmZ97LH92zu7f3A3vAAkSV51u1mMXeTE93T8/r16/fe98649sOsdXZOpJ54Cky3ROSpCvOBVuvvpmNaKb7B4AED4nIJvyQ1+lVWevP1sbY8dMsbA76FYQWZ9ICzydMx4HrcbIdCZtqPiJqEXNfA+bsfdsH1+aSXYtAnZUj3warE0nwMGEab+OdxC8iN4+06qXUuWi2NYOnhlkc2K6nPPNGr6vdAGPD6L6wReBPsVHWWT73tL/Y0BTT4E1R9Ig/Fh4lZtPANKbXDGW89qPDcKIL4d4fA1JcqGTOau0zdg4jIde3+uvym305Azosr1lxBFJLF/UEQWwoRSfxGQz3Aj+xtYaeBfLg+hg7tzoIp2/yPksMRfDKbx8NAtd2E8kU4MLgWAQeRqyg2N5qhX20ivEMyCGQGXzylUCdIl+V33puGmjYh97Y3RjJqQNzONvRDYMNgQPOihhvOnHdZzuOO3kWwnfJGa7xbXCE3e8E2I7Z7ZhM+ZnamoFV4Ti4x9liBi67A5X/CqH/R1HeCzaJkHhvCdtD+kIDeAym54bfsiHCNAPmMJlEi+V/eAXiMCZcHxfgII9Ter509hV6zAsFX5daGpLyvEScLCORN2nk+hKwgFoV1TFccGWKI3//aEjjtR95TsenvrfMSBf9JlIwIZh5s2ExiSQ9fQZbX8UUE1THZbFHsHXcHa2JyBzFeK2ErIYxjsicz2wYNsKG6ulWPMMidL6nXmaAfBeRec7RnDgcjdfH8F8NbEfwDnn+WTSDy8cp+5dXbdk2ZXfs9lmefvPwPDCH31WfwWwCb+99XTim9O5I5zSBJWJLV4n6DoV0p95brdJqdOyWwTd1M9LAC4MEZALsWrAiyXmK2RKwAPFJzmK2tjtQ+Y1oDqhC/vaQBzUOE852zK5lo9XHxQRTBZYwiVHXE+DQs5w+17HRG/HnC+qWZ2QYKdCiuq0JpPZuVB40v1fhBXO4HjpcfEU9h+3z3A7HNFpddpw3g+DNVt23q/mG+hT1Osv7r+or604svg9SfLYx/14X0Zax+WdUiaASry5nKOh7fh1rR8f23ETkIqH+yXQC+BEc02F2zsi1hTBLVPk/nGtSCRd55grTHwvJwkHEoewiXXkX8Oiqe0h0FGiS5dciXI1zMWqua+u9iNDRFsRr4x1ta4v1XGpOATcT2ZtxeO40v5Scxcn/Bp4kP4dZOopmgSU024vZTpxMIYxhthu1KeBx+a0jp4DUPnR9lxdsleYY7AxyHmnCN4NzTTzDxA6y/J/j1NF21U6gyDCGRvHsrEeQZFoEjpxEOIz3Qe+yhAhHgQTVKm2d8Xb5ETeoWQAAFc5JREFUC0Dv3qkz/cKzGSaKgwiOtP2e4Nvq/zqsOlnvpGTezzzLMzJtAqdw7lHWeN70mHR6VxjDRpcWyX/PdBHVFiInqMTHuSgYKPxSZDcmIfzEQLUFssTE9DHOdZe/knjmipXW2/wmRAgBhmnMrgOOrjpfKp4mRTNPXJhrselR5B04p+oMFdbzpcP2u+oPA5ZjNeAajCuBao8GU8e5p4E5+9DOs5+lr9u5BCxz+Mh3MOoUdD5mM5iNh/93cyb3m/16zTKv1bIgilPgBFnmA3hMYvIiNaYEU8NQpG93aVrw4flIvUVEngXqIRLLQ2weOIaqVx46ddpCvokhwv7V1SmAPPj0CYy4w0ZcCc+tNxR6KDe0LrmnWhZkR51k5JzCcs+xUr1mD1BroNYkskV27Vy0fa+hqUHue6IKXEss1xLJNX6mdoAsgnwZ7BmG45TuffVyPYLZE6A7gCvJ9RpyGwe+Jr/4taeAlt39vX4zDxrgHgI7Sjt/F1m+E5eP+6COIc/YaRu/GZFvXaas9Gh/ri/Mdb5w2JjZ8HLZf8pHC9bSK8HejcqMt1/SALeAcJRE/pYz+dqeAbYPlYNAbk/5AZn9U7BJ1MYwqqi9mWbWwKfNW+DVol39m1QtXjPB6zXMBXwi4s9i8jpW2v8MIaHtPN/dMIWcmaKWYZzEOIHJX2DRQdZ64swCdYz/DszSzt9OptfgpOpdKc+T4C0EatZe/5G46L8BMXm+C3C8unJ7sM0O1w3VKxwt1BYxO4a4ryAcx49ZL+DawVJpQXnKwyrifE1KhWdUzhzQxPhjYA7jNBfB5pr3r1WbRmyiZ3w0kegZYNZ+evKcfVrtg29sAS351W8sAKe9jdeuRHUy5IWYhCgheE3YR3b68x88dhRYIkt3g12J0xqe1Xg4KAZrMYDPlJBlPfQyEUfheyF4GwO7JzpUxxHbiQYGXSQFrQOLVNtzDGGw2D5UnmQeOIroDwYtPcFIUKYx2UHBsdYutKP+fBA52GsTiGU/t0uBpvz60UUkehTTHWT5e4EqTocreH3QiqKqXhGJjgHHeHH3UfqehX3kRh+N9eDTvu9Mr8aHGg9vrK6Hwqtho7wpM7sP8coLMS992/tya34rMKRVQQ/8Ki/4mcssSeVhoG4/98autqvFO9bj+XC+Mtz5OgUXOVnCWMbkCcydQG3Z9r3WgjeTFDhG7E7j3M/4HyMQlhE7zLBDMHP3OHAaJ5Mgk5ArlitwiNw1WWvSmMXbiB4AJogqE0hUxbFZFqTBUTz3LOyE5+3HMcvs7rds4cFEDeCzgAM3jfc/LgJDzjxpvfQCQMZIfBjHxxGJca6K0SK3JYTTkOsW2IHPhJPAPFQawB8BIAaWn0DzOsUudB49BRzHxXMI4x1Zk8tjZFZEG71W8OPWMxB/GOdiKskU4PcOhgIBzVPyLMVYRFnEj0X1pKPr4igwh8gxRCaJ4jHEnT/hmxcbRq4VfGb7Z8TC3/vzgCOK/wIAF9f8cQh1MNSvDLSFtpfw4+fkmrrk0Rzwl7joMLgv4VzwajhPMM0wlCxfwCdfP4b3zBpKcJTYOcwa8rFD3qE6GXVccqmPPBkdBSHj9ZcsAT0RJkOo7EfnfCKM122rUo0T0ga0m6B5k2wlBTLbf/2G95OHGAcSKj6WbWj4u6bXUr/13SXSDPu1nQOrdHL/rAPGcRGMTCQ+FFkVyOzObQNtSsr7H3LseWvCaG2cSgyXVCHVjIVW6JMrhi7k5HONcaDq86ECzedTVl5QoGn735bJR+cSwHHVpTViF3s5m8OLjWWefzGzz//DiyZXhnyJGEI8vg1hZIQ9RGJStvkouK3YBEMwkuMlxlASQnK4oaMZ6jrfUNSwO7dtGuAkX6KGAk3GELyP0bnCUHwQdGr/ZOMItM67f8VYQq1S5dIKTA43bcQqJKTEvrX2zuFHop6TxmsP3KjysUNFmOwqYTNMgduDYlbOWD3fKqCbCd2AJudX09ryA7K7dqjcP1sMuP42DVbGF9+n8gvfTFnrPaJbKWeL6O9L7Ttmff+n7/eLCco52sA3KXfr7nuFPd1rWBdTDuniXT9n6pt1sGk/2a9sz+Sjc0WOlwuxWuofz0PFOWm8JUqUKFFi67iYZtMSJUqU+HuBUvCWKFGixAVGKXhLlChR4gKjFLwlSpQocYFRCt4SJUqUuMAoBW+JEiVKXGCUgrdEiRIlLjBKwVuiRIkSFxjng9797y123/6frgVc7Cq3Ay7P7VFAjzxy39H+c/fcfk8C3AzE4tgFNNu5HQRURFoOGRNkH4gTT4GNhiiaVXlcOpnxNRXLmgb1XPJjkVS2C+6mwK0STvY0tya2zvXUzad7PHn44U+dumHvPbuAnQLLYtYAZg89fN+akNIbbr9rJzDlxG0HxtqaHTxWPzUHqB354llH/ey57d4bgUSi6EboZuhaVXfoJhTyyXg01/ZTQLb0yovHayNj1dFK7V2AE6KCojv0AeuUYwq5GrbQXGk+Vq2MzkQuvhXE9adwsF7eLSsSt2hLyBuYnXz1+eXDIzO1GXGyXSSeATfTjfsVf8f+thRpQT3nDqY8nqd2igpjCHEcRTcJTIfkwS60oVuP4pvz5Yq258FSNZ03yCKXvBWodumy1xkP3T5VtH0M4OlH7nuUEkNFKXiHixpeyl0VjmeKZve5I/z5L+O5y4qwyCo+H6QDRsP5GwmyHB9KXdArVUPZV/Wdt9n1rufaoi2TPedsFBhfC/eawuc7qPaUdS4YC/ecAUY2Oa/IPxnhORXG6IaUF+zUDrginLdZH0A3MUyMb1vRhxsxS/de38S3f4EuoXnRN1dtcu16bSG0paB0SkI5M0CFwfo4pTsu0nDtJVuox/wA9yhxFigF7xARSWUnkIhEHwTiKJKbgExk//sAzPZnALtu/aVaHI1ORJL/FyBGbDuwEIs+hTAujh8FxgV3SyjZAUTrZUoR8x9cA+Q0xmHJKnWJuFkcd6yXXUV6fwsUM2aWiZCZyRdvuP2+/ykS3YLo94HNIvZtfC6D08Vlb/je/1AFkrHxS35KRP6RiJsCahUqyQ2XX3cIeIw17AFnxu4f+OQ04CqV6LPAFOIm8NTia+sO/eKwhbgGwOQlV9wMjDlxP+//FBU8MT3/FrCgJVpmuJYYhxI38rgTdovwQcBJR+W1tddL8YMoxJkZf1u9curPzfKaWT4mwveJ6NsJuW+KVUi3JkG2iYZn2dFEv2MVXYyiys8gcpOIuwZkvKDLWPNkO30R5KarPgY0JNe/xqwpIh8AJrt1WK8vinKMQHGT7f6Be44DevSrnznZf2qJs0MpeIeLGl0tK8aTcq6XFKbQxrb77xLSQUriy7AdeG1nZj3BuQGq+OQhE74c2xbqMRBEBDNDhGkzxhAu82VRp6t59bfBCTIV2jEJUhXhcowJNtaQz4Q4fHaE+lc3P30VWnRXGdsEGcM/gzMgcH4hCtZEmBBcDFYFKzTmAfZDinKYBaZEGDGjil85TK8+r//Yu9yXgrzPjydhGs9peCUETsPB2jOJN9MUfTLlP4OMKSHUO6W7EisxJJSCd4jIcnkMcBWZ+DcgDmncC+ie2/SH8QP3z/bs/XRSiXg/SM1kpAEWg4VMXxmYW7J89HfAOVwyuYoCRtd7YXwOQiNLTV9tINSJKseMbBm1vwOpK5VZJEekdw4IskSpYYyJtH5MRH/ciGOi0SvV4qfNsieFdElIG3hh0sFodbwGjCmXPSREB5D2OxC7Gl25GZffoiqnZt78uUUgnf/Gfxw805pLJoAY8hiITSt3gjTMjRz1AmmF1UJqVRI0zVRnBRdHllwDLjHb9iwCRCMD9KGq0VYzq7dd2ohohzy17gnTiV9GtGWuXffnF9YZhyfPlERk5RYkfx9oQyS/yoy/STM9GMfRH0eRjHv5NQqm1wi2A0n3Qn4TJL9rXP4Vb21qgbYUy2krcy+tREuXu9EvCHwVd0kClRgXNNa1XGmhOe1gt0/nMM1UZM6EzOWVu4EqcRKuL+iOiiHhtWB1eRXAtb/7C4DGkU1SCt6hohS8Q4SqT+NnNjYLOJFXYkB9IvCOhHB0bKGi/qM96QNF0eoiEjmj1vSEfm79FwzoCA1rZ2p5C2RZoqSFZstYPmdUFlr5VSfFtXDxyz0vTwKMEGljXLQ9HsVpHTTYRiWGuGUmdcgbeE1yleYelt4x1JaMaiqyvOTPTafp2q7PwmumKDcseM2dhmi5bf/ghMlI5s2OvZ3xcjj66jWztJHISFyTaBoiZ9TmfB+OsjGKBLo5Zi01tGG01brPpGk6ccpEmm0XLXhTcgtvaq0ieRZLllfjZGGnoC2QzLff0uVX2ou1MbdUiaIELgdeT8W+FUM7EdJlhMyInk+57TgcB04j2QsqWcpy27XmV+JscqRSFyExqzlkxPlHJBuPCUvBDFEWIc80ihomkpmOnPb1Gg0MGUWXh6PzpmVz7aAhL4KfqgouvRJDQil4h4ikYrcCsZPnfxZwZrXfBRzS/AiQvun2X//LWEbHEmn+a7CWmvwm6LiQ3wnmB7bopMRLPw8kIvXtHc0GNlghFsy91ohcftqMo3k7ekii/C0S6b8Q+LJK+hnBqaO2XoL2JV/H7JuGLZjfiMGRfr9z2dWQnRLseeAgUH/T7Z+oAdVqEt8JvEvk+XFBqqireYFtCYJzzt59xURzB/Bn9NiGB4aIp2+S7BAqdWFl0RgZSOuqxSOxSPYByGsiC+/x3VQQR653RSF4UZG8hXFINbpHnFb975Zhs0ti0oQ31NcpIBSenjSzYyJ5BorI+rljhcVlv8qxFCMTGn6l0oc8XU4uxxIX8QEReadIWgNJOprqRu2J8tAmeRxoxHn016au6eIXPwY2iTmv7RbeDJ3Ms17wFi4cZnkGZG3RWUqNd6goBe9wEWy8Fmxr7kX8SzlJN4l0ofE26CSUDu47HjHYFJ0d/UAXvi6KtaYCthzIzCbAgo3XpoAxc8tqkD174N+v9/IowI37PlUkmC/OqYV6juPVymKsFG2YBLaDjQHVriToHMfoMg+fDRRQQVuGtp45+NMDa1w37vsUvu5WA5tZXa9+9Nbbemy85jALO2Cm0FIge/bAT23Yh3v2fjoDUrOOy5/Of+OBNefv2fv/wgpHCkI6ffbAtQrXrjpv+voPB4luE8B06NNNbOer2gL+GQXvDAN0Gpjq/r2/Tzqqb/FDIzSud1yUGAJKwXse0WyO/CmicW1U/h1QrbrmHwHOkAZQt5X8y1Jpz+DyT632t3WALKkb+0OQhljydEcurEEg5TDNsLRhBeEnGZjGhhuv2GXbsUyvve3+zNsm2xR7WE6iMSduLJLoOkFnQMb8/aOe8rvDpCrRPuAtgkyDzJm5LxjR171N0RSRXSCXC+k+Ed1nyqHr3vaJZaDxzN/cN/hy1aQKVNXiW0yk8T233f91W/Xyr09C0G6wlIy4sZGqA6RlMvJ/wTXh0i+BdRYWfTcDPMWWsZKZUW87bUSizXBLp5VsgA22XmblzQgGivMGtcR426txyf8yV5sVk28DzeB7vM75KcF0chosNdMdQGIWnwKrY+5eg6UuaYy3GYvIXu/ikt8BuEwv/xF/++/MDVjREgOiFLznES83RppxnLnaaOcNK3a2PVXR8kpTLrNmx31nFUSRaBlcw2x00QuN9QRveIktz8S06dfU6rruQhJsthtqLAl+1yehx7baU4/+86vApeG8DKirRfNiuWKGRDIVKpQA4+F4NhGShaCrhvsknNnOqD3XFcW0QJpG0YftTS7LMfLMsIZhuuqJnE+23wFh4pqQvGi4uncfVDZm2lVE2kt+pmkXXhIZSGbmFrz9vhDcfpKVSIoVmgKa2eQ8wPGH/21p3x0ySsF7XuCF4SW1lxsuUmfGbwOxc6/eA7RylbuB5pEj+9Mb930yW32dy4A50JrL6x8EFOpeNVlXfHVMDQ3IT2NylCx5SNCqiE4J9pOj8sIPr9XCsnC/wp5HDawqZCn66hySvqHYcPI7/jKxa++92yuiPyjwj8F+H6JHBD2K3/ECIG2lJzBzyWj+BiATxw8lo3IT8Cf0eUasB2evLgGxUWkBqYvaDwBEHU74jQUNkI5cqr8M4kzjOUTGnL3yEwDCq+/cvA+9xi7kLeDr1raPexvv4NRYq71GBrlu89X70oi3sc6ILgGLzpbfi72chDA97XHF7btnoVGL9+MVe9LMmkieAi1x7rjlo2t8rNPWyimApKo/BLiqO/ph/ED5+ACNKbEFlIL3PGLb2IuoVRRvK0uC9pfhTQ3rrJU7wrHXj5PNX+KO0IjDfXqj5YrouU0i6LwNWaRXeTLtF9QWfI/Fa541YCXYlVtH/uqujsQReb8C3LD3TYXNOAG2MbDW2+vhARTsv4Mh+PF2+rAnEs/O4A/cseU0gTEwh3WiHF4TtJ0VqnjoE6v6uinrq+DW913Gu997nqfk2eFHPr5GixV5fwNgz97vSfF7DUUUYIkhoxS8Q4TmHAacVPLfA9yhA/cpwDVvu+dPIkc8OkINaPFq8j+Ka0y0ATwINHLJT2JyIs/ksSiSySjiPUAkJmfYUDHAUhN7EZhH2yfNObBi88axvvBe9dsLZrYI+SGoHBZbWQJ7DqEusCxYGglXqtmfA08CB5244/SpbWY+P8N1t931OwJfiCN3E8JEhqi8Y39sB/af6UWe932pPwskLub7gfjMCqRfSmuePwZo7iqHI9GaM/sW4Ay9bPNrw0c0M/hWJu1FJ+7rhnwOeC7KqdPHpN0PRU4BXxGzou9PrHue2QJ0YteOAIfXrdUTn1dAd912768Cf1CJsluA1wsSb2778I/EJP+mIamYnhQjVe8umOAnl7X3C89uz95P3gmA2E8C+sa33jUG8NwT929Iv15iaygF7zBhnRwBhQcDAM1W2hqpuHh0JGoAqb1ivS9woWW1wDLDtJ3nDXEujpBmKGc9w2TnpkHopOG+qdcaJQNeWRsVtWE5Da/B0nz6r+5Kb9x7ty/PSBHp3YVJ/bmkhw5+ekMhamYt65yPDlIDgCOP3q8A19/6yWX8KuFlfxxI9cwwy4BsxVmz6jf8AkW6nSGSriN8M6AVbLyhD2lhA1G1K5AagnjteaP+Kf6W4p/9ppNRrjQBFztriPAKZ4yks/CvtPBOvRldWvRB2lEI2KKeZRbDIaMUvMNFobmsykY2/40HmgA37vvEbwAcObK/I3ifPnBfY887PvFr4b+9L+AiUPw+yMDXnqMCp4CtZJVSVr+Uh/DtWO8lLTbWNkPhu3sqHDM7sH8rLklPheMTW7gGQr2+eWB/dt2+/5wCvx9+34rwKATOIqEPDj3yi5tquwGzQK8HwEbtXQyf4wzWl8X5c2y9Hb3HQwCHD3zmTG0pnt2vADz3xP3ru5CUOGuIbbgrWqJEiRIlzgfKJUSJEiVKXGCUgrdEiRIlLjBKwVuiRIkSFxil4C1RokSJC4z/D16Htd5/SocvAAAAAElFTkSuQmCC" height="90" />
        </div>
        <div class="col-right">
            <br>
            <h2 class="title" style="font-size: 1.8em">INVOICE</h2>
            <p style="font-size: 1.4em" class="company bold">PT. AltaFocus Media Center</p>
            <p style="font-size: 1.3em">Manage Service Provider</p>
        </div>
    </div>

    <div class="sub-header">
        <div class="col-left">
            <p class="title bold">Kepada Yth</p>
            <p style="text-transform: capitalize;">Sifulan bin fulan</p>
            <p style="text-transform: capitalize;" class="location">08123456789</p>
            <p>
                Raya jurang susuh
                Kota Batu
                Jawa Timur
            </p>
        </div>
        <div class="col-right">
            <table>
                <tbody class="text-right">
                    <tr>
                        <th class="title">No Invoice</th>
                        <td>INV-1234567890</td>
                    </tr>
                    <tr>
                        <th class="title">Tanggal</th>
                        <td>2024-11-30</td>
                    </tr>
                    <tr>
                        <th class="title">Jatuh Tempo</th>
                        <td>2024-11-30</td>
                    </tr>
                    <tr>
                        <th class="title">Dibayarkan Pada</th>
                        <td>2024-11-30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th>JENIS LAYANAN / ITEM</th>
                    <th class="text-right">HARGA</th>
                    <th class="text-right">QUANTITY</th>
                    <th class="text-right">DISCOUNT</th>
                    <th class="text-right">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Teh botol</td>
                    <td class="text-right">10.000</td>
                    <td class="text-right">2</td>
                    <td class="text-right">0</td>
                    <td class="text-right">20.000</td>
                </tr>
                <tr>
                    <td style="border: none;"></td>
                    <td style="border: none;" class="text-right"></td>
                    <td style="border: none;" class="text-right"></td>
                    <td style="border: none;" class="text-right"></td>
                    <td style="border: none;" class="text-right"></td>
                </tr>
                <tr>
                    <td style="border: none;"></td>
                    <td style="border: none;" class="text-right"></td>
                    <td style="border: none;" class="text-right"></td>
                    <td style="border: none;" class="text-right">
                        <span class="bold" style="float: left;">Discount:</span>
                        <span style="float: right; font-size: 10px;"></span>
                        <span style="clear: both; margin: 0; padding: 0;"></span>
                    </td>
                    <td style="border: none;" class="text-right">
                        <span class="bold" style="float: left;">Total:</span>
                        <span style="float: right; font-size: 10px;"></span>
                        <span style="clear: both; margin: 0; padding: 0;"></span>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td class="border-0" colspan="3"></td>
                    <td class="text-right border-0 py" style="padding-bottom: 0 !important">Sub Total :</td>
                    <td class="text-right border-0 py" style="padding-bottom: 0 !important"></td>
                </tr>

                <tr>
                    <td class="border-0" colspan="3"></td>
                    <td class="text-right border-0 py">Ppn (11%) :</td>
                    <td class="text-right border-0 py"></td>
                </tr>

                <tr>
                    <td class="border-0" colspan="3"></td>
                    <td class="text-right border-0 py"></td>
                    <td class="text-right border-0 py">
                        <hr style="font-size: 10px">
                    </td>
                </tr>

                <tr>
                    <td class="border-0" colspan="3"></td>
                    <td class="text-right border-0 py bold">Total :</td>
                    <td class="text-right border-0 py bold"></td>
                </tr>

                <tr>
                    <td class="border-0" colspan="3"></td>
                    <td class="text-right border-0 py">Down Payment :</td>
                    <td class="text-right border-0 py"></td>
                </tr>

                <tr>
                    <td class="border-0" colspan="3"></td>
                    <td class="text-right border-0 py">Kode Unik :</td>
                    <td class="text-right border-0 py"></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="amount">
        <div class="col-left" style="background: #0f0;">
            <h3 style="text-transform: uppercase; color: #fff; font-size: 1.7em">PAID</h3>
        </div>
        <div class="col-right">
            <h4 class="title bold">Total</h4>
            <h2 class="text-right">Rp. </h2>
        </div>
    </div>
    <div class="footer">
        <ul>
            <li class="bold" style="list-style: none;">Instruksi Pembayaran</li>
            <li style="list-style: none;">
                Ini instruksi
            </li>
        </ul>

        <ul>
            <li class="bold" style="list-style: none;">Memo</li>
            <li style="list-style: none;">
                Ini memo / catatan
            </li>
        </ul>

        <hr style="color: transparent; margin: 0;" />

    </div>

    <div class="sub-footer" style="float: right;">
        <div class="box">
            <h5 class="title bold">Digital Signature</h5>
            <img src="data:image/png;base64,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" alt="">
            <p class="bold" style="margin-top: 5px;">
                Finance AltaFocus Media Center
            </p>
        </div>
    </div>

    <div style="clear: both;"></div>

    <div style="position: relative; bottom: 0; width: 100%;">
        <hr style="border-top: 1px solid #000; color: #fff" />
        <div class="footer">
            <center>
                <p class="bold" style="font-size: 0.7em">PT. AltaFocus Media Center</p>
                <p><span class="bold" style="font-size: 0.7em">Office : </span> <span style="font-size: 0.6em">Raya jurang susuh</span></p>
                <p>
                    <span class="bold" style="font-size: 0.7em">Phone : </span> <span style="font-size: 0.6em">08123456789</span>
                    <span class="bold" style="font-size: 0.7em">Website : </span> <span style="font-size: 0.6em">https://google.com</span>
                    <span class="bold" style="font-size: 0.7em">Email : </span> <span style="font-size: 0.6em">admin@gmail.com</span>
                </p>
            </center>
        </div>
    </div>
</body>

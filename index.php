<!DOCTYPE html  >
<html>
<head>
    <meta charset="UTF-8">
    <title>Converter</title>
    <link rel="stylesheet" type="text/css" href="asset/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h2>Converter</h2>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Length

        </div>
        <div class="panel-body">
            <form id="Length">
                <input type="hidden" id="type" value="Length">
                <div class="form-group col-md-2">
                    <label>Value</label>
                    <input type="text" id="value" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>From</label>
                    <select class="form-control" id="from">
                        <option value="Centimeter">Centimeter</option>
                        <option value="Meter">Meter</option>
                        <option value="Feet">Feet</option>
                        <option value="Inch">Inch</option>
                        <option value="Mile">Mile</option>
                        <option value="Yard">Yard</option>


                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label>To</label>
                    <select class="form-control" id="to">
                        <option value="Centimeter">Centimeter</option>
                        <option value="Meter">Meter</option>
                        <option value="Feet">Feet</option>
                        <option value="Inch">Inch</option>
                        <option value="Mile">Mile</option>
                        <option value="Yard">Yard</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <input type="submit" class=" form-control btn btn-primary" value="Convert"/>
                </div>

                <div class="col-md-12  text-center">
                    <br/>
                    <span class="alert alert-info" id="result"> <i class="fa fa-question" aria-hidden="true"></i> Please select the value and click Convert</span><br/><br/>
                </div>

            </form>
        </div>


    </div>
    <div class="panel panel-primary">

        <div class="panel-heading">
            Computer

        </div>
        <div class="panel-body">
            <form id="Computer">
                <input type="hidden" id="type" value="Computer">
                <div class="form-group col-md-2">
                    <label>Value</label>
                    <input type="text" id="value" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>From</label>
                    <select class="form-control" id="from">
                        <option value='Byte'>Byte</option>
                        <option value='Kilobyte'>Kilobyte</option>
                        <option value='Megabyte'>Megabyte</option>
                        <option value='Gigabyte'>Gigabyte</option>
                        <option value='Terabyte'>Terabyte</option>
                        <option value='Petabyte'>Petabyte</option>
                        <option value='Exabyte'>Exabyte</option>
                        <option value='Zetabyte'>Zetabyte</option>


                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label>To</label>
                    <select class="form-control" id="to">
                        <option value='Byte'>Byte</option>
                        <option value='Kilobyte'>Kilobyte</option>
                        <option value='Megabyte'>Megabyte</option>
                        <option value='Gigabyte'>Gigabyte</option>
                        <option value='Terabyte'>Terabyte</option>
                        <option value='Petabyte'>Petabyte</option>
                        <option value='Exabyte'>Exabyte</option>
                        <option value='Zetabyte'>Zetabyte</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <input type="submit" class=" form-control btn btn-primary" value="Convert"/>
                </div>

                <div class="col-md-12  text-center">
                    <br/>
                    <span class="alert alert-info" id="result"> <i class="fa fa-question" aria-hidden="true"></i> Please select the value and click Convert</span><br/><br/>
                </div>

            </form>
        </div>


        <div class="panel-heading">
            Capital

        </div>
        <div class="panel-body">
            <form id="Country">
                <input type="hidden" id="type" value="Country">

                <div class="form-group col-md-4">
                    <label>Country</label>

                    <select class="form-control" id="Country">
                        <?php

                        $dsn = 'mysql:host=localhost;dbname=WS;charset=utf8';
                        $user = 'root';
                        $password = '';
                        try {
                            $pdo = new PDO($dsn, $user, $password);
                        } catch (Exception $e) {
                            die($e->getMessage());
                        }
                        $smt = $pdo->prepare("SELECT * FROM countries");
                        $smt->execute();
                        $data = $smt->fetchAll();

                        ?>
                        <?php foreach ($data as $row): ?>
                            <option value='<?= $row["countryName"] ?>'><?= $row["countryName"] ?></option>
                        <?php endforeach ?>


                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <input type="submit" class=" form-control btn btn-primary" value="Convert"/>
                </div>

                <div class="col-md-12  text-center">
                    <br/>
                    <span class="alert alert-info" id="result"> <i class="fa fa-question" aria-hidden="true"></i> Please select the value and click Convert</span><br/><br/>
                </div>

            </form>
        </div>


    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Calculator

        </div>
        <div class="panel-body">
            <form id="Calculator">
                <input type="hidden" id="type" value="Calculator">
                <div class="form-group col-md-2">
                    <label>Value 1</label>
                    <input type="text" id="value1" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Operator</label>
                    <select class="form-control" id="operator">
                        <option value="plus">+</option>
                        <option value="minus">-</option>
                        <option value="divide">/</option>
                        <option value="multiple">*</option>


                    </select>

                </div>
                <div class="form-group col-md-2">
                    <label>Value 2</label>
                    <input type="text" id="value2" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <input type="submit" class=" form-control btn btn-primary" value="Calculate"/>
                </div>

                <div class="col-md-12  text-center">
                    <br/>
                    <span class="alert alert-info" id="result"> <i class="fa fa-question" aria-hidden="true"></i> Please fill the values and click Calculate</span><br/><br/>
                </div>

            </form>
        </div>


    </div>


</div> <!-- end row-->
<script type="text/javascript" src="asset/jquery.min.js"></script>
<script type="text/javascript" src="asset/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("form").submit(function (e) {
            var form = "#" + e.target.id;
            e.preventDefault();
            $(form + " #result").removeClass();
            $(form + " #result").html('');

            var from = $(form + " #from").val();
            var to = $(form + " #to").val();
            var value = $(form + " #value").val();
            var type = $(form + " #type").val();
            var Country = $(form + " #Country").val();
            var operator = $(form + " #operator").val();
            var value1 = $(form + " #value1").val();
            var value2 = $(form + " #value2").val();


            $.ajax({
                url: "http://localhost/hoooh/controller.php",
                data: {
                    from: from,
                    to: to,
                    value: value,
                    type: type,
                    Country: Country,
                    value1: value1,
                    value2: value2,
                    operator: operator
                },
                method: "get",
                dataType: "json",
                success: function (res) {
                    console.log(res);
                    if (res.status == 1) {

                        $(form + " #result").addClass("alert alert-success");
                        $(form + " #result").html("<b>" + res.result + "</b>");

                    } else {
                        $(form + " #result").addClass("alert alert-danger");
                        $(form + " #result").html(res.result);

                    }
                },
                error: function (e, a) {
                    console.log(e);
                    console.log(a);
                    $(form + " #result").addClass("alert alert-warning");
                    $(form + " #result").text("Problem happened!");


                },
            })
        });
    })
</script>

</body>
</html>
<?php
include "external.html";
?>
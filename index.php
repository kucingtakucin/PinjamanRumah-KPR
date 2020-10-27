<?php
/**
 * Copyright 2020. Adam Arthur Faizal. All Right Reserved
 *
 * @author (Adam Arthur Faizal)
 * @version (27 Oktober 2020)
 * @license MIT License
 * @copyright
 *
 * DILARANG COPY-PASTE TANPA SE-IJIN PEMILIK REPOSITORY !!!
 */
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simulasi KPR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><b>UTS</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container pt-5 pb-2">
            <div class="card rounded-lg shadow">
                <div class="card-body">
                    <h1 class="font-weight-bold text-center mt-5">SIMULASI KPR</h1>
                    <form action="" method="post" class="mt-5 mb-2">
                        <div class="form-group">
                            <label for="HargaRumah">Harga Rumah</label>
                            <input type="number" min="100000000" class="form-control" id="HargaRumah" name="hargarumah" required>
                            <small class="form-text text-muted">Minimal Rp.100 juta</small>
                        </div>
                        <div class="form-group">
                            <label for="uangmuka">Uang Muka (DP)</label>
                            <input type="number" min="0" class="form-control" id="uangmuka" name="uangmuka">
                            <small class="form-text text-muted">(persen dari harga rumah)</small>
                        </div>
                        <div class="form-group">
                            <label for="jangkawaktu">Jangka Waktu (Tenor)</label>
                            <input type="number" min="0" class="form-control" id="jangkawaktu" name="jangkawaktu">
                        </div>
                        <div class="form-group">
                            <label for="marginbank">Margin Bank</label>
                            <input type="number" min="0" class="form-control" id="marginbank" name="marginbank">
                        </div>
                        <div class="form-group">
                            <label for="perhitunganmargin">Perhitungan Margin</label>
                            <select class="form-control custom-select" id="perhitunganmargin" name="perhitunganmargin">
                                <option disabled selected>Pilih salah satu</option>
                                <option value="Flat">Flat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary" name="submit">Kalkulasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!--  Modal  -->
    <?php
    /**
     * Copyright 2020. Adam Arthur Faizal. All Right Reserved
     *
     * @author (Adam Arthur Faizal)
     * @version (27 Oktober 2020)
     * @license MIT License
     * @copyright
     *
     * DILARANG COPY-PASTE TANPA SE-IJIN PEMILIK REPOSITORY !!!
     */
    if (isset($_POST['submit'])): ?>
        <div class="modal fade" tabindex="-1" id="hasilkpr">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" colspan="2">Data Anda</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-right">Harga Rumah :</th>
                                    <td>Rp.<?= number_format($_POST['hargarumah']) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right">Uang Muka (DP) :</th>
                                    <td>Rp.<?= number_format((int) $_POST['hargarumah'] * (int) $_POST['uangmuka'] / 100) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right">Jangka Waktu :</th>
                                    <td><?= number_format($_POST['jangkawaktu']) ?> tahun</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right">Margin Bank :</th>
                                    <td><?= number_format($_POST['marginbank']) ?> %/tahun</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right">Perhitungan Margin :</th>
                                    <td><b><?= ($_POST['perhitunganmargin']) ?></b></td>
                                </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <footer>
        <h4 class="text-center font-italic mb-5 mt-2">Copyright &copy; 2020. Adam Arthur Faizal. All Rights Reserved</h4>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if (document.getElementById('hasilkpr')) {
                $('#hasilkpr').modal('show');
            }
        });
    </script>
</body>
</html>
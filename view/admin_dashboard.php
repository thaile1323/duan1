    <div id="content">
        <h2>Thống kê số lượng sản phẩm theo danh mục</h2>
        <div class="row">
            <div class="col-md-3">
              <div class="card text-bg-primary mb-3">
                <div class="card-body">
                  <h5 class="card-title">Thống kê số sản phẩm</h5>
                  <p class="card-text" style="color: #fff;"><?=$tkSp?></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">Thống kê tài khoản</h5>
                  <p class="card-text" style="color: #fff;"><?=$tkTk?></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-bg-warning mb-3">
                <div class="card-body">
                  <h5 class="card-title" style="color: #000;">Thống kê danh mục</h5>
                  <p class="card-text">4</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-bg-danger mb-3">
                <div class="card-body">
                  <h5 class="card-title" style="color: #000;">Thống kê đơn hàng</h5>
                  <p class="card-text">1</p>
                </div>
              </div>
            </div>
        </div>
        <div class="table" style="width: 50%; margin-top: 30px; margin-left: 10px;">
            <table>
                <thead>
                    <tr>
                        <th>Danh mục</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tkProductByNameCat as $value):?>
                        <tr>
                            <td><?=$value['TenChuDe']?></td>
                            <td><?=$value['SoLuong']?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
        <div id="myChart" style="max-width:700px; height:400px"></div>
    </div>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
                google.charts.load('current',{packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Your Function
                function drawChart() {
                const data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng'],
                <?php foreach ($tkProductByNameCat as $value) {
                echo "['".$value['TenChuDe']."',".$value['SoLuong']."],";
                }
                ?>
            ]);
            // Set Options
            const options = {
                title:'Biểu đồ thống kê số sản phẩm theo danh mục',
                is3D: true,
            };
            // Draw
            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
            }
        </script>
</body>
</html>

<div>
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="container-fluid py-4">
          <div class="row pl-2">
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                              <i class="fa fa-fw fa-door-open" aria-hidden="true"></i>
                          </div>
                          <div class="text-end pt-1">
                              <h4 class="mb-0">Puerta 1</h4>
                          </div>
                      </div>
                      <hr class="dark horizontal my-0">
                      <div class="card-footer p-3">
                            <div class="form-check form-switch float-end my-auto">
                                <input 
                                    id="navbarFixed"
                                    class="form-check-input"
                                    type="checkbox"
                                    onclick=""
                                >
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                              <i class="fa fa-fw fa-door-open" aria-hidden="true"></i>
                          </div>
                          <div class="text-end pt-1">                            
                              <h4 class="mb-0">Puerta 2</h4>
                          </div>
                      </div>
                      <hr class="dark horizontal my-0">
                      <div class="card-footer p-3">
                            <div class="form-check form-switch float-end my-auto">
                                <input 
                                    id="navbarFixed"
                                    class="form-check-input"
                                    type="checkbox"
                                    onclick=""
                                >
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                              <i class="fa fa-fw fa-door-open" aria-hidden="true"></i>
                          </div>
                          <div class="text-end pt-1">
                                <h4 class="mb-0">Puerta 3</h4>
                          </div>
                      </div>
                      <hr class="dark horizontal my-0">
                      <div class="card-footer p-3">
                            <div class="form-check form-switch float-end my-auto">
                                <input 
                                    id="navbarFixed"
                                    class="form-check-input"
                                    type="checkbox"
                                    onclick=""
                                >
                            </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mt-4">
              <div class="col-lg-4 col-md-6 mt-4 mb-4">
              </div>
              <div class="col-lg-4 col-md-6 mt-4 mb-4">
                  <div class="card z-index-2  ">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                              <div class="chart">
                                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                            <h6 class="mb-0 "> Selecciona una puerta </h6>
                            <select class="form-select">
                                <option selected value=""></option>
                                <option value="1">Puerta 1</option>
                                <option value="2">Puerta 2</option>
                                <option value="3">Puerta 3</option>
                            </select>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-4 mb-3">
              </div>
          </div>
      </div>
  </div>
  </div>
  @push('js')
  <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
  <script>


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      new Chart(ctx2, {
          type: "line",
          data: {
              labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [{
                  label: "Mobile apps",
                  tension: 0,
                  borderWidth: 0,
                  pointRadius: 5,
                  pointBackgroundColor: "rgba(255, 255, 255, .8)",
                  pointBorderColor: "transparent",
                  borderColor: "rgba(255, 255, 255, .8)",
                  borderColor: "rgba(255, 255, 255, .8)",
                  borderWidth: 4,
                  backgroundColor: "transparent",
                  fill: true,
                  data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                  maxBarThickness: 6

              }],
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false,
                  }
              },
              interaction: {
                  intersect: false,
                  mode: 'index',
              },
              scales: {
                  y: {
                      grid: {
                          drawBorder: false,
                          display: true,
                          drawOnChartArea: true,
                          drawTicks: false,
                          borderDash: [5, 5],
                          color: 'rgba(255, 255, 255, .2)'
                      },
                      ticks: {
                          display: true,
                          color: '#f8f9fa',
                          padding: 10,
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                      }
                  },
                  x: {
                      grid: {
                          drawBorder: false,
                          display: false,
                          drawOnChartArea: false,
                          drawTicks: false,
                          borderDash: [5, 5]
                      },
                      ticks: {
                          display: true,
                          color: '#f8f9fa',
                          padding: 10,
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                      }
                  },
              },
          },
      });


  </script>
  @endpush

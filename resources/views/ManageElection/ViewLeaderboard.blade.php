<x-app-layout>
    <!-- Show Graph Data -->
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    
    

    <div class="page-content">
        <div clas="container-fluid">
            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-15">
                                <div class="card">
                                   

                                    <div class="container">
                                        <h4 class="header-title mt-0">Leaderboard</h4> 
                                        <br>

                                        <form action="{{ route('election.sort') }}" method="GET">
                                            <select name="sort" onchange="this.form.submit()">
                                                <option>Choose Sort</option>
                                                <option value="asc">Sort ascending</option>
                                                <option value="desc">Sort descending</option>
                                            </select>
                                        </form>

                                        <br>
                                        <br>

                                        <form action="{{ route('election.ranking') }}" method="GET">
                                            <div class="form-group">
                                                <label for="year">Filter by Year of Election:</label>
                                                <select class="form-control" name="year" onchange="this.form.submit()">
                                                    <option>Change Year</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <canvas id="chart" ></canvas>
                                    </div>
                                </body>
                                
                                
                                <script>
                                    var ctx = document.getElementById('chart').getContext('2d');
                                    var chart = new Chart(ctx, {
                                        type: 'horizontalBar',
                                        data: {
                                            labels: [
                                                @foreach ($election as $candidate)
                                                "{{ Str::limit($candidate->candidate_name, 10) }}",
                                                @endforeach
                                            ],
                                            datasets: [{
                                                label: 'Total Votes',
                                                backgroundColor: 'rgb(255, 99, 132)',
                                                borderColor: 'rgb(255, 99, 132)',
                                                data: [
                                                    @foreach ($election as $candidate)
                                                        "{{ number_format($candidate->total_vote, 0) }}",
                                                    @endforeach
                                                ]
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                                    
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->

                            </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    </div>
</x-app-layout>

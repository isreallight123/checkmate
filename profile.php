<?php require_once 'includes/header.php'; ?>



<!-- Profile starts here -->
<article id="profile-content" class="article-top">
    <section id="profile-bio" class="container mb-3 py-1">
        <div class="row">
            <div id="profile-name"class="col-sm-12 mb-1">
                <h3>Kelechi Okorie</h3>
            </div>
            <div id="profile-stack" class="col-sm-12 mb-1">
                <p>Fullstack</p>
            </div>
            <div id="profile-email" class="col-sm-12 mb-1">
                <p>kelechiokorie22@gmail.com</p>
            </div>
        </div>
    </section>

    <!-- Attendance -->
    <div class="row">
    <section id="attendance" class="col-md-5 profile-item">
        <div id="attendance-header" class="profile-item-header"><h3>Attendance</h3></div>
        <div id="attendance-body" class="profile-item-body">
            <canvas id="attendanceChart" width="100%" height="100%"></canvas>
        </div>
        <div id="attendance-footer" class="profile-item-footer">
            <p>68%</p>
            <p>35/50</p>
        </div>

        <script>
            var ctx = document.getElementById('attendanceChart').getContext('2d');
            let var1 = 20, var2 = 30;
            const myRequest = new Request('./api_test/test.json');
            fetch(myRequest)
            .then(response => {
                return response.json();
            })
            .then(data => {
                var1 = data[0].value1;
                var2 = data[0].value2;
            });

            const options = {
                type: 'pie',
                data: {
                    labels: ['Absents', 'Presents'],
                    datasets: [{
                        // label: '# of Votes',
                        data: [var1, var2],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }]
                },

            }

            var myChart = new Chart(ctx, options);
        </script>
    </section>

    <!-- Assignments -->
    <section id="assignment" class="col-md-5 profile-item">
        <div id="assignment-header" class="profile-item-header"><h3>Assignments</h3></div>
        <div id="assignment-body" class="profile-item-body">
            <canvas id="assignmentChart" width="100%" height="100%"></canvas>
        </div>
        <div id="attendance-footer" class="profile-item-footer">
            <p>68%</p>
            <p>35/50</p>
        </div>

        <script>
            var ctx = document.getElementById('assignmentChart').getContext('2d');
            // const var1 = 12, var2 = 19;
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Absents', 'Presents'],
                    datasets: [{
                        // label: '# of Votes',
                        data: [19, 20],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }]
                },

            });
        </script>
    </section>
</article> <!-- Profile ends here -->




<?php require_once 'includes/footer.php' ?>
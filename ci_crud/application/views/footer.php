    <footer class="footer">
        <p >Copyright 2020</p>
    </footer>
    
    <script>
        $(document).ready(function() {

            $(".btn-save").click(function() {

                var url = $(this).attr('href');

                var data = {
                    'name': $(".name").val(),
                    'age': $(".age").val(),
                    'sex': $(".sex").val(),
                    'address': $(".address").val(),
                }

                $.ajax({
                    type: 'post',
                    url: url,
                    data: data,

                    success: function(res) {
                        window.location.href = 'student_list';
                    }

                })
            });

            $('#create_submit').click(function() {

                var insert_url = $("#create_info").attr("action");
                // console.log(url);

                var insert_data = {
                    'name': $("#name").val(),
                    'age': $("#age").val(),
                    'sex': $("#sex").val(),
                    'address': $("#address").val(),
                }

                console.log(insert_data);

                $.ajax({
                    type: 'post',
                    url: insert_url,
                    data: insert_data,

                    success: function(res) {
                        window.location.href = 'student_list';
                    }

                })

            });

            
            
        })
    </script>

</body>
</html>
<script>
        $(document).ready(function() {
            var jawab = false;
            $('.lihat_jawab').click(function() {
                if (jawab == false) {
                    $(this).text('tutup jawaban');
                    jawab = true;
                } else {
                    $(this).text('lihat jawaban');
                    jawab = false;
                }
            });
        });
    </script>

    </body>

    </html>
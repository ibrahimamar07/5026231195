<!DOCTYPE html>
<html>

<head>
    <title>Demo CSS Object-Position</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .box {
            width: 200px;
            height: 200px;
            border: 2px solid #333;
            overflow: hidden;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .pos-center {
            object-position: center;
        }

        .pos-top {
            object-position: top;
        }

        .pos-bottom {
            object-position: bottom;
        }

        .pos-custom {
            object-position: 30% 70%;
        }

    </style>
</head>

<body>
    <h1>Demo CSS Object-Position</h1>

    <div class="container">
        <div>
            <h3>Center (default)</h3>
            <div class="box">
                <img src="https://th.bing.com/th/id/OIP.gVYpZomrD-3VvtTkGGX8xgHaFj?rs=1&pid=ImgDetMain"
                    class="pos-center" alt="Landscape">
            </div>
        </div>

        <div>
            <h3>Top</h3>
            <div class="box">
                <img src="https://th.bing.com/th/id/OIP.gVYpZomrD-3VvtTkGGX8xgHaFj?rs=1&pid=ImgDetMain" class="pos-top"
                    alt="Landscape">
            </div>
        </div>

        <div>
            <h3>Bottom</h3>
            <div class="box">
                <img src="https://th.bing.com/th/id/OIP.gVYpZomrD-3VvtTkGGX8xgHaFj?rs=1&pid=ImgDetMain"
                    class="pos-bottom" alt="Landscape">
            </div>
        </div>

        <div>
            <h3>Custom (30% 70%)</h3>
            <div class="box">
                <img src="https://th.bing.com/th/id/OIP.gVYpZomrD-3VvtTkGGX8xgHaFj?rs=1&pid=ImgDetMain"
                    class="pos-custom" alt="Landscape">
            </div>
        </div>
    </div>
</body>

</html>

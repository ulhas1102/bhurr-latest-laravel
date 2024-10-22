<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Labels</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css">
    <style>
        .inputGroup {
            position: relative;
            margin: 1rem 0;
        }

        .inputGroup input {
            font-size: 1rem;
            padding: 1rem;
            outline: none;
            border: 0.2rem solid rgb(200, 200, 200);
            background-color: transparent;
            border-radius: 2rem;
            width: 100%;
        }

        .inputGroup label {
            font-size: 1rem;
            position: absolute;
            left: 0;
            padding: 0.5rem;
            margin-left: 0.5rem;
            pointer-events: none;
            transition: all 0.3s ease;
            color: rgb(100, 100, 100);
        }

        .inputGroup :is(input:focus, input:valid)~label {
            transform: translateY(-50%) scale(0.9);
            margin: 0;
            margin-left: 1.3rem;
            padding: 0.4rem;
            background-color: #e8e8e8;
        }

        .inputGroup :is(input:focus, input:valid) {
            border-color: rgb(150, 150, 200);
        }
    </style>
    </style>
</head>

<body>

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="form-row">
            <div class="col-md-3 px-md-3 inputGroup align-items-end">
                <input type="text" class="form-control" id="from" placeholder=" " required>
                <label for="from">FROM</label>
            </div>
            <div class="col-md-3 px-md-3 inputGroup align-items-end">
                <input type="text" class="form-control" id="to" placeholder=" " required>
                <label for="to">TO</label>
            </div>
            <div class="col-md-2 px-md-3 inputGroup">
                <input type="text" class="form-control" id="pick-up" placeholder=" " required>
                <label for="pick-up">PICK UP</label>
            </div>
            <div class="col-md-2 px-md-3 inputGroup">
                <input type="text" class="form-control" id="pick-up-at" placeholder=" " required>
                <label for="pick-up-at">PICK UP AT</label>
            </div>
            <div class="col-md-2 px-md-3 inputGroup">
                <input type="number" class="form-control" id="persons" placeholder=" " required>
                <label for="persons">Persons</label>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
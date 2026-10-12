<!DOCTYPE html>
<html>
<head>
    <title>Create Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 600px;
            margin: 50px auto;
            background-color: #5fcf80;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: white;
            background-color: #4caf70;
            padding: 20px;
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 150px;
            color: white;
            font-size: 16px;
        }

        input, select {
            width: 300px;
            padding: 8px;
        }

        .button {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 8px 20px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Create Produk</h1>

    <form action="/products" method="POST">

        @csrf

        <div class="form-group">
            <label>Barcode</label>
            <input type="text" name="barcode_number">
        </div>

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="product_name">
        </div>

        <div class="form-group">
            <label>Harga Beli</label>
            <input type="number" name="buy_price" value="0">
        </div>

        <div class="form-group">
            <label>Harga Jual</label>
            <input type="number" name="sell_price" value="0">
        </div>

        <div class="form-group">
            <label>Supplier</label>

            <select name="supplier_id">
                <option value="">-- Pilih Supplier --</option>

                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">
                        {{ $supplier->supplier_name }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="button">
            <button type="submit">Create</button>

            <button type="button" onclick="window.location.href='/products'">
                Batal
            </button>
        </div>

    </form>

</div>

</body>
</html>
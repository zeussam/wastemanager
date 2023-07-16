<x-app-layout>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            background-color: #28a745;
            color: #fff;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            float: right;
            cursor: pointer;
            color: #888;
        }

        .rating label:before {
            content: '\2606';
            margin-right: 5px;
        }

        .rating input[type="radio"]:checked ~ label:before {
            content: '\2605';
            color: #e2b406;
        }

        .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
    </style>

    <div class="container">
        <h1>Create Review</h1>

        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="rating">Rating:</label>
                <div class="rating">
                    <input type="radio" name="rating" id="star5" value="5" required><label for="star5"></label>
                    <input type="radio" name="rating" id="star4" value="4"><label for="star4"></label>
                    <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
                    <input type="radio" name="rating" id="star2" value="2"><label for="star2"></label>
                    <input type="radio" name="rating" id="star1" value="1"><label for="star1"></label>
                </div>
            </div>

            <div class="form-group">
                <label for="review">Review:</label>
                <textarea name="review" id="review" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>

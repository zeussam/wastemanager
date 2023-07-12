<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Schedule Collection</title>

   <style>
    @import url(https://fonts.googleapis.com/css?family=Oxygen:700,400,300);
 body {
      font-family: 'lato', sans-serif;
    }

    .container {
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 10px;
      padding-right: 10px;
    }

    h2 {
      font-size: 26px;
      margin: 20px 0;
      text-align: center;
    }

    small {
      font-size: 0.5em;
    }

    .responsive-table li {
      border-radius: 3px;
      padding: 25px 30px;
      display: flex;
      justify-content: space-between;
      margin-bottom: 25px;
    }

    .table-header {
      background-color: #167F92;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }

    .table-row {
      background-color: #ffffff;
      box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
    }

    .col-1 {
      flex-basis: 10%;
    }

    .col-2 {
        margin-left: 20px
      flex-basis: 40%;
    }

    .col-3 {
      flex-basis: 25%;
    }

    .col-4 {
      flex-basis: 25%;
    }

    @media all and (max-width: 767px) {
      .table-header {
        display: none;
      }

      .table-row {}

      li {
        display: block;
      }

      .col {
        flex-basis: 100%;
      }

      .col {
        display: flex;
        padding: 10px 0;
      }

      .col:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
        </style>
</head>
<body>
<div class="container">
  <h2>PICKUP ORDERS</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Customer Name</div>
      <div class="col col-2">Date</div>
      <div class="col col-3">Time</div>
      <div class="col col-4">Status</div>
      <div class="col col-5">Actions</div>
    </li>
      @foreach ($rows as $row)
    <li class="table-row">
      <div class="col col-1" data-label="Customer Name">{{ $row->cname }}</div>
      <div class="col col-2" data-label="Date">{{ $row->date }}</div>
      <div class="col col-3" data-label="Time">{{ $row->time }}</div>
      <div class="col col-4" data-label="Status">{{ $row->status }}</div>
       <div class="col col-5" data-label="Actions">
        @if ($row->status == 'completed')
          <a class="review-button" href="{{ route('review', ['id' => $row->id]) }}">Review</a>
        @endif
    </li>
    @endforeach
  </ul>
</div>
</body>
</html>

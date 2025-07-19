<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Exports Pdf</title>
    <style>
      /* Reset simple */
      *, ::after, ::before{
     font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;

      }
      body {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;

        background-color: #f9fafb; /* gris clair */
        color: #1f2937; /* gris foncé */
        padding: 1rem;
        margin: 0;
      }

      .header {
        margin-bottom: 1.5rem;
      }

      .header h1 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
      }

      .header p {
        font-size: 0.875rem;
        color: #4b5563; /* gris moyen */
      }

      .total {
        margin-bottom: 1.5rem;
        font-style: italic;
        color: #374151;
      }

      .total span {
        font-weight: 600;
      }

      /* Table container for horizontal scroll on small devices */
      .overflow-x-auto {
        overflow-x: auto;
      }

      table {
        width: 100%;
        background-color: white;
        border-collapse: collapse;
        box-shadow: 0 1px 3px rgb(0 0 0 / 0.1);
        border-radius: 0.5rem;
        overflow: hidden;
        min-width: 600px;
      }

      thead {
        background-color: #16a34a; /* vert moyen */
        color: white;
      }

      thead th {
        padding: 0.75rem 1.5rem;
        text-align: left;
        font-weight: 600;
        font-size: 1rem;
      }

      tbody tr:nth-child(even) {
        background-color: #f9fafb; /* gris très clair */
      }

      tbody tr:hover {
        background-color: #bbf7d0; /* vert très clair */
        transition: background-color 0.3s ease;
      }

      tbody td {
        padding: 0.75rem 1.5rem;
        vertical-align: middle;
      }

      tbody td.font-medium {
        font-weight: 500;
      }

      .footer {
        margin-top: 2rem;
        font-size: 0.75rem;
        color: #6b7280; /* gris clair */
        font-style: italic;
        text-align: center;
      }

      /* Responsive adjustments */
      @media (max-width: 640px) {
        body {
          padding: 0.5rem;
        }
        table {
          min-width: unset;
        }
      }
    </style>
</head>
<body>

    <div class="header">
        <h1>Inventaires des produits</h1>
        <p>Generé le: {{$date}}</p>
    </div>

    <div class="total">
        <p>Total des produits : <span>{{ $products->count() }}</span></p>
        <p>Valeur totale de l'inventaire : <span>{{ $totalValue }}</span></p>
    </div>

    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="font-medium">{{ $product->title }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }} CFA</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="footer">
        Document généré automatiquement par le système
    </div>

</body>
</html>

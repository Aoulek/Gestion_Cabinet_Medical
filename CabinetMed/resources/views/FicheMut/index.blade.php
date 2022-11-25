
<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Fiches Mutuelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<h2> Gestion des Fiches Mutuelle</h2>
                        <a href="{{ url('/FicheMut/create') }}" class="btn btn-success btn-sm" title="Add New Fiche Mutuelle">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        
                            <table class="table">
                                <thead>
                                   
                                        <th>Nom patient</th>
                                        <th>Prénom patient</th>
                                        <th>Nom médecin</th>
                                        <th>Prénom médecin</th>
                                        <th>Date de Soins</th>
                                        <th>Code Mutuelle</th>
                                        <th>Montant Total</th>
                                        <th>Montant Mutuelle</th>
                                    
                                </thead>

                                <tbody>
                                @foreach($fiche_muts as $item)
                                    <tr>
                                        
                                        <td>{{ $item-> nom_pat}}</td>
                                        <td>{{ $item-> prenom_pat}}</td>
                                        <td>{{ $item-> nom_med}}</td>
                                        <td>{{ $item-> prenom_med}}</td>
                                        <td>{{ $item-> date_soins}}</td>
                                        <td>{{ $item-> code_mut}}</td>
                                        <td>{{ $item-> montant_total}}</td>
                                        <td>{{ $item-> montant_total}}</td>
                                        <td>
                                            <a href="{{ url('/FicheMut/' . $item->id) }}" title="View Fiche Mutuelle"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/FicheMut/' . $item->id . '/edit') }}" title="Edit Fiche du Patient"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/FicheMut' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Fiche Mutuelle" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        
  
</body>
<style>
    /* demo styles */

  @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
  body{
  margin: 50px;
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
  }

  h2{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
  th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
 }
  td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
  </style>
</html>
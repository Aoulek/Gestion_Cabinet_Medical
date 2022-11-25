
<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Certificats médicaux</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
</head>
<body>
  
<h2> Gestion des Certificats</h2>
                        <a href="{{ url('/Certificat/create') }}" class="btn btn-success btn-sm" title="Add New Certificat">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        
                        
                            <table class="table">
                                <thead>
                                    
                                        
                                        <th class="table-primary">Nom patient</th>
                                        <th class="table-primary">Prénom patient</th>
                                        <th class="table-primary">Nom médecin</th>
                                        <th class="table-primary">Prénom médecin</th>
                                        <th class="table-primary">Date</th>
                                        <th class="table-primary">Heure</th>
                                        <th class="table-primary">Durée</th>
                                    
                                </thead>
                                
                                <tbody>
                                @foreach($certificats as $item)
                                    <tr>
                                        
                                        <td>{{ $item-> nom_pat}}</td>
                                        <td>{{ $item-> prenom_pat}}</td>
                                        <td>{{ $item-> nom_med}}</td>
                                        <td>{{ $item-> prenom_med}}</td>
                                        <td>{{ $item-> date}}</td>
                                        <td>{{ $item->heure }}</td>
                                        <td>{{ $item-> dure}}</td>
                                        <td>
                                            <a href="{{ url('/Certificat/' . $item->id) }}" title="View Certificat"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Certificat/' . $item->id . '/edit') }}" title="Edit Certificat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Certificat' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Certificat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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


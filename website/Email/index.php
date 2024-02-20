<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">  
    <style>
        input[required]{
    background-image: radial-gradient(#F00 15%, transparent 16%), radial-gradient(#F00 15%, transparent 16%);
    background-size: 1em 1em;
    background-position: right top;
    background-repeat: no-repeat;
}
    </style>
    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
</head>
<body class="bg-light">
<div class="container mt-5">
                <div class="row">
                    <div class="co-md-12">
                            <div class="card shadow">
                                <div class="card-header bg-info">
                                  <h4 class="text-white">Draft a Mail</h4></div>
                                  
    
                            <div class="card-body">
						
                      
                                    <!-- start fetch -->

							<form role="form" method="post" action="mail.php">
                            <div class="form-group mt-3">
									<label >Mail To</label>
									<input class="form-control mt-1" type="text"  name="mailto" required="true">
								</div>
								<div class="form-group mt-3">
									<label >Subject</label>
									<input class="form-control mt-1" type="text"  name="subject" required="true">
								</div>
                                <div class="form-group mt-3">
									<label>Greet</label>
									<input class="form-control mt-1" type="text"  name="great" required="true">
								</div>
								<div class="form-group mt-3">
									<label>Mail</label>
									<textarea name="mail"></textarea>
										<script>
												CKEDITOR.replace( 'mail' );
										</script>
								</div>
                                <div class="form-group mt-3">
									<label>Footer</label>
									<input class="form-control mt-1" type="text"  name="footer">
								</div> 
                                <div class="form-group mt-3">
									<label>Regards</label>
									<input class="form-control mt-1" type="text"  name="regards" required="true">
								</div>
								
								
								
								
								</div>
								
								<div class="card-footer mt-5">
									<button type="submit" class="btn btn-primary form-control" name="submit">Save</button>
								
                                
                               
								</form>
								</div>
                                </div>
                    
						
							</form>
                                            
                                        <!--end fetch  -->
								</div>
							
						</div>
					</div>
                    
    
</body>
</html>
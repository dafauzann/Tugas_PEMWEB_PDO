<?php 
    $dbUser = 'root';
    $dbServer = 'localhost';
    $dbPassword = '';
    $dbName = 'classicmodels';

try{
        $conn = new PDO("mysql:host=$dbServer;dbname=$dbName",$dbUser,$dbPassword);

        function showData($query) {
        
        global $conn;
        $result = $conn->query($query);
        $rows = [];
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $rows[] = $row;
        }
        return $rows;
        }
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err){
        echo "Failed connect to Database Server : ".$err->getMessage();
    }

try{
    function tambahCustomer($data){
        global $conn;

        $custNumber = $data["customerNumber"];
        $custName = $data["customerName"];
        $contactLast = $data["contactLastName"];
        $contactFirst = $data["contactFirstName"];
        $phone = $data["phone"];
        $address1 = $data["addressLine1"];
        $address2 = $data["addressLine2"];
        $city = $data["city"];
        $state = $data["state"];
        $postalCode = $data["postalCode"];
        $country = $data["country"];
        $salesNumber = $data["salesRepEmployeeNumber"];
        $creditLimit = $data["creditLimit"];

        $query =  "INSERT INTO customers(customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES(
            '$custNumber','$custName','$contactLast','$contactFirst','$phone',
            '$address1','$address2','$city','$state','$postalCode','$country','$salesNumber','$creditLimit')
            ";
        
        $result=$conn->query($query);
        
        return $result;
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "Koneksi/Query bermasalah : ".$err->getMessage();
}


try{
    function tambahProduct($data){
        global $conn;

        $code = $data["productCode"];
        $name = $data["productName"];
        $line = $data["productLine"];
        $scale = $data["productScale"];
        $vendor = $data["productVendor"];
        $desc = $data["productDescription"];
        $quantity = $data["quantityInStock"];
        $price = $data["buyPrice"];
        $msrp = $data["MSRP"];

        $query = "INSERT INTO products(productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES(
            '$code', '$name','$line', '$scale', '$vendor', '$desc', '$quantity', '$price', '$msrp')";
            
        $result=$conn->query($query);

        return $result;
    }$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "Koneksi/Query bermasalah : ".$err->getMessage();
}


try{
    function hapusDataCustomer($custNumber){
        global $conn;
        $query = "DELETE FROM customers WHERE customerNumber = $custNumber";
        $result = $conn->query($query);

        return $result;
    }$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "Koneksi/Query bermasalah : ".$err->getMessage();
}



try{
    function hapusDataProduct($productCode){
        global $conn;
        $query = "DELETE FROM products WHERE productCode = $productCode";
        $result = $conn->query($query);

        return $result;
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "Koneksi/Query bermasalah : ".$err->getMessage();
}


try{
    function updateDataCustomer($data){
        global $conn;

        $custNumber = $data["customerNumber"];
        $custName = $data["customerName"];
        $contactFirst = $data["contactFirstName"];
        $contactLast = $data["contactLastName"];
        $phone = $data["phone"];
        $address1 = $data["addressLine1"];
        $address2 = $data["addressLine2"];
        $city = $data["city"];
        $state = $data["state"];
        $postalCode =$data["postalCode"];
        $country =$data["country"];
        $salesNumber = $data["salesRepEmployeeNumber"];
        $creditLimit = $data["creditLimit"];
        $query = "UPDATE customers SET 
                    customerName = '$custName',
                    contactFirstName = '$contactFirst',
                    contactLastName = '$contactLast',
                    phone = '$phone',
                    addressLine1 = '$address1',
                    addressLine2 = '$address2',
                    city = '$city',
                    state = '$state',
                    postalCode = '$postalCode',
                    country = '$country',
                    salesRepEmployeeNumber = '$salesNumber',
                    creditLimit = '$creditLimit'
                    WHERE customerNumber = $custNumber;
                ";
        $result = $conn->query($query);
        return $result;
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "Koneksi/Query bermasalah : ".$err->getMessage();
}


try{
    function updateProduct($data){
        global $conn;

        $code = $data["productCode"];
        $name = $data["productName"];
        $line = $data["productLine"];
        $scale = $data["productScale"];
        $vendor = $data["productVendor"];
        $desc = $data["productDescription"];
        $quantity = $data["quantityInStock"];
        $price = $data["buyPrice"];
        $msrp = $data["MSRP"];

        $query = "UPDATE products SET
                    productName = '$name',
                    productLine = '$line',
                    productScale = '$scale',
                    productVendor = '$vendor',
                    productDescription = '$desc',
                    quantityInStock = '$quantity',
                    buyPrice = '$price',
                    MSRP = '$msrp'
                    WHERE productCode = '$code';";
        $result = $conn->query($query);
        return $result;
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo "Koneksi/Query bermasalah : ".$err->getMessage();
}
?>


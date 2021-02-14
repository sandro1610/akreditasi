<?php
if (isset($_GET['q'])) {
    $q = $_GET['q'];
    switch ($q) {
        case 'akreditasi':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM tb_akreditasi WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=dashboard';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=dashboard';</script>";
                }
            }
            break;
        case 'c1':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c1 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c1';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c1';</script>";
                }
            }
            break;
        case 'c2':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c2 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c2';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c2';</script>";
                }
            }
            break;
        case 'c3':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c3 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c3';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c3';</script>";
                }
            }
            break;
        case 'c4':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c4 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c4';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c4';</script>";
                }
            }
            break;
        case 'c5':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c5 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c5';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c5';</script>";
                }
            }
            break;
        case 'c6':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c6 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c6';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c6';</script>";
                }
            }
            break;
        case 'c7':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c7 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c7';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c7';</script>";
                }
            }
            break;
        case 'c8':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c8 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c8';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c8';</script>";
                }
            }
            break;
        case 'c9':
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM c9 WHERE id='" . $id . "'";
                $query  = mysqli_query($link, $sql);
                if ($query) {
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=c9';</script>";
                } else {
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=c9';</script>";
                }
            }
            break;
        default:
            include $dir . 'blank.php';
            break;
    }
} else {
    include $dir . 'dashboard.php';
}

<!DOCTYPE html>

<html>

<head>
    
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style1.css" rel="stylesheet" type="text/css"/>
<link href="heapsort.html" rel="html" type="text/html"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<title>Heap Sort</title>
<body>
    <div class="header">
        <div class="inner-header">
        <div class="logo">
           <img src="Heap" alt="">
        </div>
         <div class="header-link">
             <a href="#"><i class="material-icons">home</i></a>
         </div>
           <div class="header-link">
            <a href="./heapsort.html"><i class="material-icons">account_tree</i></a>
            </div>
           
            </div>
            <div class="header-link">
             <a href="./contact.html"><i class="material-icons">contacts</i></a>
         </div>
     </div> 
    
    
        <h1 style="font-size: 45px; color: white;"><center>HEAP SORT</center></h1>
        <div class="graph"></div>
        <div class="details-body">
        <div class="detailsCard">
        <p><strong>Heap sort</strong> is a comparison-based sorting technique based on Binary Heap data structure. It is similar to selection sort where we first find the minimum element and place the minimum element at the beginning. We repeat the same process for the remaining elements.</p>
         </div>
         <div class="detailsCard">
           <p><strong>What is Binary Heap?</strong><br><br>
            Let us first define a Complete Binary Tree. A complete binary tree is a binary tree in which every level, except possibly the last, is completely filled, and all nodes are as far left as possible.
            A Binary Heap is a Complete Binary Tree where items are stored in a special order such that the value in a parent node is greater(or smaller) than the values in its two children nodes. The former is called max heap and the latter is called min-heap. The heap can be represented by a binary tree or array.</p>
       </div>
       <div class="detailsCard" style="color: rgb(54, 11, 124);">

        <table class="table table-bordered">
            <thead>
                <tr class="danger">
                    <th class="text-center">Name</th>
                    <th class="text-center">Best-case</th>
                    <th class="text-center">Average-case</th>
                    <th class="text-center">Worst-case</th>
                    <th class="text-center">Memory</th>
                    <th class="text-center">Stable</th>
                </tr>
            </thead>
            <tbody class="text-center well-color">
                <tr>
                    <td>HeapSort</td>
                    <td>n log n</td>
                    <td>n log n</td>
                    <td>n log n</td>
                    <td>1</td>
                    <td>no</td>
                </tr>
            </tbody>
        </table>
    </div>

      <div class="detailsCard" style="color: rgb(54, 11, 124);">
        <h1 style="margin-left: 10px;">Algorithm -</h1>
        <p style="margin-top: 72px; text-align: left; margin-left: -115px;">heapify(array)<br>
            Root = array[0]<br>
            Largest = largest( array[0] , array [2 * 0 + 1]. array[2 * 0 + 2])<br>
            if(Root != Largest)<br>
                Swap(Root, Largest)</p>
    </div>
        </div>
</body>

</html>

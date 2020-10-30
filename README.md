## Lab 1: Message Passing Interface in Python

> Scripts

[area_script.py](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/main/MPI-Lab/area_script.py) : demonstrates finding the area under a curve using the Trapezoidal Rule.
  
[mpi_trial.py](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/main/MPI-Lab/mpi_trial.py) : test script for sending messages between processes over MPI.

[mpi_area.py](https://github.com/AllanVikiru/DistributedObjectsWebServices/blob/main/MPI-Lab/mpi_area.py) : illustrates calculation of area using Trapezoidal Rule and MPI. 

> Prerequisites

[Install MPI](https://www.microsoft.com/en-us/download/details.aspx?id=57467) 

[Setup MPI](https://nyu-cds.github.io/python-mpi/setup/)

*Note: these tutorials are restricted to Windows systems*

> Program Execution

```
mpiexec -np x python mpi_area.py      # where x is the number of processes specified
```



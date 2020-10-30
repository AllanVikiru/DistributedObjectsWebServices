"""
Question C.Find the area under the curve in section(A) using Parallel Computing

"""

from mpi4py import MPI
from area_script import f  # import y function = y = f(x) = x

comm = MPI.COMM_WORLD
no_of_processes = comm.Get_size()
rank = comm.Get_rank()

a = 0.0  # initial endpoint
b = 10.0  # final endpoint
n = 5  # number of trapezoids
h = (b - a) / n  # h = Δx
s = 0.0  # sum of area during calculation

total = 0  # final sum of area

# define at most 4 processes for communication
if rank != 0:
    if rank == 1:
        s += f(a)  # sum at initial endpoint
        message = s
        comm.send(message, dest=0)
    elif rank == 2:
        for i in range(1, int(n)):
            s += 2 * f(a + i * h)  # sum at endpoints within range a-b
        message = s
        comm.send(message, dest=0)
    elif rank == 3:
        s += f(b)  # sum at final endpoint
        message = s * (h / 2.0)  # multiplier with  (Δx/ 2)
        comm.send(message, dest=0)

else:
    for procid in range(1, no_of_processes):
        message = comm.recv(source=procid)
        total += message
        print('Area from process', procid, ':', message)

if total > 0:
    print('Total area', ':', total, "square units")

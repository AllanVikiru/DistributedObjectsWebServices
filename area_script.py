"""
Question A. Calculate the Area under the curve
Script for calculating area using the Trapezoidal Rule:
b
∫ f(x)dx ≈ [f(x0) + 2f(x1) + 2f(x2) + ... + 2f(xn−1) + f(xn)] [Δx/2], where Δx =(b−a)/n.
a
where:
a = initial endpoint
b = final endpoint
n = number of trapezoids
"""


# define y = f(x) = x
def f(x):
    return x


# function to find area
def area(a, b, n):
    h = (b - a) / n  # h = Δx
    s = 0.0
    s += f(a)  # sum at initial endpoint
    for i in range(1, int(n)):
        s += 2 * f(a + i * h)  # sum at endpoints within range a-b
    s += f(b)  # sum at final endpoint
    return s * (h / 2.0)


# compute area
if __name__ == '__main__':
    print(area(0, 10, 5), "square units")



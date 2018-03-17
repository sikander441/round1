# Python3 implementation to find the position of
# rightmost bit where a carry is generated first

import math

# function to find the position of
# rightmost set bit in 'n'
def posOfRightmostSetBit( n ):
    return int(math.log2(n & -n) + 1)

# function to find the position of rightmost
# bit where a carry is generated first
def posOfCarryBit( a , b ):
    return posOfRightmostSetBit(a & b)

# Driver program to test above
t=int(input())
for _ in range(t):
    l=[int(x) for x in input().split()]
    a = 100
    b = 2
    print(posOfCarryBit(a, b))

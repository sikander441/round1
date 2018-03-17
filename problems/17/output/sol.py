# Python3 program to
# find remainder when
# all array elements
# are multiplied.

# Find reminder of arr[0] * arr[1]
# * .. * arr[n-1]
def findreminder(arr, lens, n):
    mul = 1

    # find the individual
    # reminder and
    # multiple with mul.
    for i in range(lens):
        mul = (mul * (arr[i] % n)) % n

    return mul % n

# Driven code
t=int(input())
for _ in range(t):
    l=[int(x) for x in input().split()]
    n,k=l[0],l[1]
    arr = [ int(x) for x in input().split() ]
    print( findreminder(arr, n, k))

    # This code is contributed by "rishabh_jain".

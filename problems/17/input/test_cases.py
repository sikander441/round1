import random
prime=[2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31]
t=100
print(t)
n=25
for _ in range(t):
 a=random.randint(1,n)
 b=random.choice(prime)
 print(a,b)
 for _ in range(a):
     print(random.randint(1,n),end=" ")
 print("")

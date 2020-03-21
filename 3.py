def triangle(a):
	if type(a)==int:
		if a>=0:
			for i in range (a):
				print((i+1) * "#")
		else:
			print("Parameter harus angka dan Positif!")
	else:	
		print("Parameter harus angka dan Positif!")
x=input()

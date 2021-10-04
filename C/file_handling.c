#include<stdio.h>  //header file
int main(void)
{
	int no, x , error; //declaring variable
	FILE * cPtr; // open file
	cPtr = fopen("number.dat","a+"); // read and write file
	printf("Enter number");
	scanf("%d", &no); // get input from user
	while( no != -99)  // using whie loop
	{
		error = 1;
		fseek(cPtr,0,SEEK_SET);
		while(!feof(cPtr))
		{
			fscanf(cPtr,"%d", &x);
			if(x == no)
			{
				printf("already entered\n"); // display error message
				error = 0;
				x = -99;
			}
		}
		if(error == 1)
		{
			fprintf(cPtr,"%d\n", no);
		}
		printf("Enter number");
		scanf("%d", &no);
	}
	fclose(cPtr); //close file
	return 0;
}
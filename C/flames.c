#include<stdio.h>
#include<string.h>
void calculate(int a);
int main()
{
char S1[20];
char S2[20];
int N1=0;
int N2=0;
int sum;

printf("\n");
printf("WELCOME TO FLAMES!!!\n");
printf("Please use small letters only.\n ");
printf("\n");
printf("Enter the 1st name\n");
scanf("%20s",S1);
printf("\n");
printf("Enter the 2nd name\n");
scanf("%20s",S2);
printf("\n");

int a=strlen(S1)+strlen(S2);

printf("%s & %s, ",S1,S2);

int b=strlen(S1);
int x=strlen(S2);

for(int i=0; i<b; i++)
{
for(int y=0; y<x; y++)
  {

    if(S1[i]==S2[y])
    {
      S1[i]=0;
      S2[y]=0;
    }
  }

}
for(int a=0; a<b; a++)
{
 if(S1[a]!=0)
 {
 	N1=N1+1;
 }
}
for(int a=0; a<x; a++)
{
 if(S2[a]!=0)
 {
 	N2=N2+1;
 }
}

sum=N1+N2;
calculate(sum); 

}
void calculate(int a)
    {
     if(a==3||a==5||a==14||a==16||a==18)
     {
     	printf("you are friends");
     	printf("\n");
     }
     else if(a==10)
     {
     	printf("both are in love");
     	printf("\n");
     }
     else if(a==8||a==12||a==13||a==17)
     {
     	printf("it's an affection");
     	printf("\n");
     }
     else if(a==6||a==11||a==15)
     {
     	printf("you will get married soon");
     	printf("\n");
     }
      else if(a==2||a==4||a==7||a==9||a==20)
     {
     	printf("you are enemies");
     	printf("\n");
     }
      else if(a==1||a==19)
     {
     	printf("you both are brother & sister");
     	printf("\n");
     }
    }

#include <stdio.h>

int main(void) {
  char name[1][20];
  int count=0,i=0;
  float marks=0,total=0;
  printf("Enter your name :");
  scanf("%s",name[0]);
  printf("How many subject do you have :");
  scanf("%d",&count);

  if(count<=1){
    printf("Sorry %s we can't calculate Average ",name[0]);
  }
  else{
    while(i<count){
      printf("Enter your marks-%d : ",i+1);
      scanf("%f",&marks);
      total+=marks;
      i++;
    }
    printf("%s Your average is : %.2f",name[0],(total/count));
  }
  return 0;
}
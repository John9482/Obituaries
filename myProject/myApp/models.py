from django.db import models

class Obituary(models.Model):
    name = models.CharField(max_length=255)
    date_of_birth = models.DateField()
    date_of_death = models.DateField()
    content = models.TextField()
    author = models.CharField(max_length=255)

    def __str__(self):
        return self.name

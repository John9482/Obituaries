from django.shortcuts import render, redirect
from .forms import ObituaryForm
from .models import Obituary

def home(request):
    context={}
    return render(request, "myApp/obituary_form.html", context)




def submit_obituary(request):
    if request.method == 'POST':
        form = ObituaryForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('view_obituaries')
    else:
        form = ObituaryForm()
    return render(request, 'myApp/obituary_form.html', {'form': form})

def view_obituaries(request):
    obituaries = Obituary.objects.all()
    return render(request, 'myApp/view.php', {'obituaries': obituaries})

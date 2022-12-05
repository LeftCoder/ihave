;(() => {
  let windowElement = $(window),
    navElement = $('#mainNavigation .navbar-nav .nav-item'),
    galleryElement = $('.popup-gallery'),
    findUsElement = $('.find-us'),
    modalWindow = $('#cennik-modal'),
    modalTable = $('#cennik-modal-serwisu'),
    searchModal = $('#searchbox-modal'),
    mobileTable = $('#cennik-mobile-serwisu'),
    searchMobile = $('#searchbox-mobile'),
    messageForm = $('#send-email'),
    tableOptions = {
      language: {
        processing: 'Przetwarzanie...',
        loadingRecords: 'Wczytywanie...',
        zeroRecords: 'Nie znaleziono pasujących pozycji',
        emptyTable: 'Brak pozycji',
        paginate: {
          first: 'Pierwsza',
          previous: 'Poprzednia',
          next: 'Następna',
          last: 'Ostatnia',
        },
      },
      paging: true,
      pageLength: 10,
      info: false,
      ordering: false,
      autoWidth: false,
    }

  function clearTableSearch() {
    if (windowElement.width() >= 992) {
      searchMobile.val('')
      mobileTable.DataTable().destroy()
      mobileTable.DataTable(tableOptions)
    }
  }

  function resetInput() {
    var that = $(this),
      input = that.find('input[type="text"]'),
      table = that.find('table')
    input.val('')
    table.DataTable().destroy()
    table.DataTable(tableOptions)
  }

  function focusInput() {
    var that = $(this),
      input = that.find('input[type="text"]')
    input.focus()
  }

  function sendEmail(event) {
    var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      data = {}

    that.find('[name]').each(function (index, value) {
      var that = $(this),
        name = that.attr('name'),
        value = that.val()

      data[name] = value
    })

    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function (data) {
        var response = data
        var messageBox = document.getElementById('message-box')

        if (response == true) {
          $(messageBox).addClass('alert-success')
          $(messageBox).show().text('Wiadomość zotała wysłana. Dziękujemy.')

          grecaptcha.reset()

          that.find('[name]').each(function () {
            var that = $(this)
            that.val('')
          })

          setTimeout(function () {
            $(messageBox).hide()
          }, 8000)
        } else {
          $(messageBox).addClass('alert-danger')
          $(messageBox)
            .show('fade')
            .text('Sprawdź poprawność wpisanych danych.')

          setTimeout(function () {
            $(messageBox).hide()
          }, 8000)
        }
      },
    })

    event.preventDefault()
  }

  //When the DOM is loaded fire all functions
  $(document).ready(function () {
    var modal = modalTable.DataTable(tableOptions)
    var mobile = mobileTable.DataTable(tableOptions)

    CookieAlert.init(cookieOptions)
    galleryElement.magnificPopup(galleryOptions)
    findUsElement.magnificPopup(galleryOptions)

    searchModal.on('keyup search input paste cut', function () {
      modal.search(this.value, true).draw()
    })
    searchMobile.on('keyup search input paste cut', function () {
      mobile.search(this.value, true).draw()
    })

    windowElement.on('resize', clearTableSearch)
  })
})()
